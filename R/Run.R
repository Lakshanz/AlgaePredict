#path to the dir of this file
setwd("C:/xampp/htdocs/AlgaePredict/R/")

load("SystemData.RData")

bestModelsNames <- sapply(bestScores(res.all),function(x) x['nmse','system'])
learners <- c(rf='randomForest',rpart='rpartXse') 
funcs <- learners[sapply(strsplit(bestModelsNames,'\\.'), function(x) x[2])]
parSetts <- lapply(bestModelsNames, function(x) getVariant(x,res.all)@pars)

bestModels <- list()
for(a in 1:7) {
  form <- as.formula(paste(names(clean.algae)[11+a],'~ .'))
  bestModels[[a]] <- do.call(funcs[a], c(list(form,clean.algae[,c(1:11,11+a)]),parSetts[[a]]))
}

clean.test.algae <- knnImputation(algaeTest,k=10,distData=algaeData[,1:11])


preds <- matrix(ncol=7,nrow=140)
for(i in 1:nrow(clean.test.algae)) 
  preds[i,] <- sapply(1:7,
                      function(x) 
                        predict(bestModels[[x]],clean.test.algae[i,])
  )

avg.preds <- apply(algae[,12:18],2,mean)
apply( ((algae.sols-preds)^2), 2,mean) / apply( (scale(algaeEval,avg.preds,F)^2),2,mean)
preds[140,]