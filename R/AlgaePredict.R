#path to the dir of this file
setwd("C:/xampp/htdocs/AlgaePredict/R/")

library(methods)
library(lattice)
library(grid)
library(DMwR)
library(randomForest)
library(rpart)
#library(session)

args<-commandArgs(TRUE)
datasetPath <- args[1]

#reading tranned models
load("SystemData.RData")
options(warn=-1)

bestModelsNames <- sapply(bestScores(res.all),function(x) x['nmse','system'])
learners <- c(rf='randomForest',rpart='rpartXse') 
funcs <- learners[sapply(strsplit(bestModelsNames,'\\.'), function(x) x[2])]
parSetts <- lapply(bestModelsNames, function(x) getVariant(x,res.all)@pars)

bestModels <- list()
for(a in 1:7) {
  form <- as.formula(paste(names(clean.algae)[11+a],'~ .'))
  bestModels[[a]] <- do.call(funcs[a], c(list(form,clean.algae[,c(1:11,11+a)]),parSetts[[a]]))
}

#load test data set //'dataset/one.txt'
Predictor <- read.table(datasetPath,header=F,dec='.',col.names=c('season','size','speed','mxPH','mnO2','Cl','NO3','NH4','oPO4','PO4','Chla'),na.strings=c('XXXXXXX'))

clean.test.algae <- knnImputation(Predictor,k=10,distData=algaeData[,1:11])


preds <- matrix(ncol=7,nrow=1)
for(i in 1:nrow(clean.test.algae)) 
  preds[i,] <- sapply(1:7,
                      function(x) 
                        predict(bestModels[[x]],clean.test.algae[i,])
  )

preds[1,]