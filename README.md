#Intelligent Algae Blooms Predictor with [R](https://www.r-project.org/) and PHP

High concentrations of certain harmful algae in rivers constitute a serious ecological problem with a strong impact not only on river lifeforms, but also on water quality. Being able to monitor and perform an early forecast of algae blooms is essential to improving the quality of rivers. With the goal of addressing this prediction problem, several water samples were collected in different rivers at different times during a period of approximately 1 year. For each water sample, different chemical properties were measured as well as the frequency of occurrence of seven harmful algae. Some other characteristics of the water collection process were also stored, such as the season of the year, the river size, and the river speed. Each observation contains information on 11 variables,  Such as Maximum pH value, Minimum value of O2 (oxygen), Mean value of Cl (chloride), Mean value of NO-3 (nitrates), Mean value of NH+4 (ammonium), Mean of PO3−4 (orthophosphate), frequencies of 7 algae types, etc.

One of the main motivations behind this application lies in the fact that chemical monitoring is cheap and easily automated, while the biological analysis of the samples to identify the algae that are present in the water involves microscopic examination, requires trained manpower, and is therefore both expensive and slow.

##How to Install:
1.	Install R 3.1.2

2.	Install necessary R libraries to system with dependencies. The following list of libraries are needed
  1. DMwR
  2. randomForest
  3. rpart

3.	Add R’s “bin” folder to windows system path (environment variables in windows). In my case “C:\Program Files\R\R-3.1.2\bin”. In other words, you must be able to execute “RScript” command from your terminal or command promote directly.

4.	Install XAMPP to enable PHP runtime environment

5.	Copy Application folder (Application/AlgaePredict) to “C:\xampp\htdocs” folder.

6.	Open Your web browser and load “http://localhost/AlgaePredict”

##Screenshot
![Home Page](https://github.com/Lakshanz/AlgaePredict/blob/master/Screenshot.png)




