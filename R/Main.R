#path to the dir of this file
setwd("C:/xampp/htdocs/AlgaePredict/R/")

###################################################
### Init
###################################################

library(DMwR)
library(randomForest)
library(rpart)

###################################################
### Load Data
###################################################

# load training data set
algaeData <- read.table('dataset/Analysis2.txt',header=F,dec='.',col.names=c('season','size','speed','mxPH','mnO2','Cl','NO3','NH4','oPO4','PO4','Chla','a1','a2','a3','a4','a5','a6','a7'),na.strings=c('XXXXXXX'))

#load test data set
algaeTest <- read.table('dataset/Eval.txt',header=F,dec='.',col.names=c('season','size','speed','mxPH','mnO2','Cl','NO3','NH4','oPO4','PO4','Chla'),na.strings=c('XXXXXXX'))

#load evaluation data set
algaeEval <- read.table('dataset/Sols.txt',header=F,dec='.',col.names=c('a1','a2','a3','a4','a5','a6','a7'),na.strings=c('XXXXXXX'))

# copy of data orginal dataset
algaeOrg <- algaeData


###################################################
### Create a Linear Regression Model for a1
###################################################

##Remove Complely Missing Data & Fill missing data
algaeData <- algae[-manyNAs(algaeData), ]
clean.algae <- knnImputation(algaeData, k = 10)

##obtains a linear regression model
lm.a1 <- lm(a1 ~ .,data=clean.algae[,1:12])

##obtaining final model
final.lm <- step(lm.a1)

###################################################
### Create a Decision Tree Model for a1
###################################################

##creating model
rt.a1 <- rpart(a1 ~ .,data=algaeData[,1:12])


###################################################
### Model Evaluation and Selection
###################################################

##    Implement a full train+test+evaluate cycle for the given training and
##    test datasets. These functions return a vector
##    with the values of whatever evaluation metrics & we've to estimate by
##    cross-validation

cv.rpart <- function(form,train,test,...) {
  m <- rpartXse(form,train,...)
  p <- predict(m,test)
  mse <- mean((p-resp(form,test))^2)
  c(nmse=mse/mean((mean(resp(form,train))-resp(form,test))^2))
}

cv.lm <- function(form,train,test,...) {
  m <- lm(form,train,...)
  p <- predict(m,test)
  p <- ifelse(p < 0,0,p)
  mse <- mean((p-resp(form,test))^2)
  c(nmse=mse/mean((mean(resp(form,train))-resp(form,test))^2))
}

##     carry out a similar comparative experiment for all seven prediction tasks
DSs <- sapply(names(clean.algae)[12:18],
              function(x,names.attrs) { 
                f <- as.formula(paste(x,"~ ."))
                dataset(f,clean.algae[,c(names.attrs,x)],x) 
              },
              names(clean.algae)[1:11])

##     function to carry out the cross-validation comparison automatically
cv.rf <- function(form,train,test,...) {
  m <- randomForest(form,train,...)
  p <- predict(m,test)
  mse <- mean((p-resp(form,test))^2)
  c(nmse=mse/mean((mean(resp(form,train))-resp(form,test))^2))
}

res.all <- experimentalComparison(
  DSs,
  c(variants('cv.lm'),
    variants('cv.rpart',se=c(0,0.5,1)),
    variants('cv.rf',ntree=c(200,500,700))
  ),
  cvSettings(5,10,1234))

bestScores(res.all)

###################################################
### Save All the data
###################################################
save(list = ls(all = TRUE), file="SystemData.RData")
