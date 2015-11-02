<?php include "inc/predict.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>AlgaePredict by Lakshan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./dist/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="./dist/css/flatboost.css" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../" class="navbar-brand">AlgaePredict</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="./">Predict</a>
            </li>
            <li>
              <a href="./train.php">Train</a>
            </li>
            <li>
              <a href="./dataset.php">Train Dataset</a>
            </li>
            <li>
              <a href="./accuracy.php">Accuracy</a>
            </li>
          </ul>

          <!-- <ul class="nav navbar-nav navbar-right">
            <li><a href="http://builtwithbootstrap.com/" target="_blank">Built With Bootstrap</a></li>
            <li><a href="https://wrapbootstrap.com/?ref=bsw" target="_blank">WrapBootstrap</a></li>
          </ul> -->

        </div>
      </div>
    </div>


    <div class="container">

      <div class="page-header" id="banner" style="margin-top:100px">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>Algae Predictor</h1>
            <p class="lead">Intelligent algae population distributions predictor</p>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-6">

          </div>
        </div>
      </div>

      <!-- Forms
      ================================================== -->
      <div class="bs-docs-section">
        <!-- <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="forms">Forms</h1>
            </div>
          </div>
        </div> -->

        <div class="row">
          <div class="col-lg-6">
            <div class="well bs-component">
              <form class="form-horizontal" method="post" action="./">
                <fieldset>
                  <legend>Fill Data</legend>
                  <div class="form-group">
                    <label for="season" class="col-lg-2 control-label">Season</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="season">
                        <option>Autumn</option>
                        <option>Spring</option>
                        <option>Summer</option>
                        <option>Winter</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="size" class="col-lg-2 control-label">River Size</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="size">
                        <option>Large</option>
                        <option>Medium</option>
                        <option>Small</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="speed" class="col-lg-2 control-label">River Speed</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="speed">
                        <option>High</option>
                        <option>Medium</option>
                        <option>Low</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="mxPH" class="col-lg-2 control-label">Max PH</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="mxPH" placeholder="Max PH">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="mnO2" class="col-lg-2 control-label">mnO2</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="mnO2" placeholder="mnO2">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="Cl" class="col-lg-2 control-label">Cl</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="Cl" placeholder="Cl">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="NO3" class="col-lg-2 control-label">NO3</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="NO3" placeholder="NO3">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="NH4" class="col-lg-2 control-label">NH4</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="NH4" placeholder="NH4">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="oPO4" class="col-lg-2 control-label">oPO4</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="oPO4" placeholder="oPO4">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="PO4" class="col-lg-2 control-label">PO4</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="PO4" placeholder="PO4">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="Chla" class="col-lg-2 control-label">Chla</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="Chla" placeholder="Chla">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <!-- <button class="btn btn-default">Cancel</button> -->
                      <input type="submit" class="btn btn-primary" value="Submit to Predict">
                      <!-- <button type="submit" class="btn btn-primary">Submit to Predict</button> -->
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
          <div class="col-lg-4 col-lg-offset-1">

              <form class="bs-component">
                <legend>Predictions</legend>

                <div class="form-group">
                  <label class="control-label" for="a1">A1</label>
                  <input class="form-control" id="a1" type="text" placeholder="<?=@$a[1]?>" disabled="">
                </div>

                <div class="form-group">
                  <label class="control-label" for="a2">A2</label>
                  <input class="form-control" id="a2" type="text" placeholder="<?=@$a[2]?>" disabled="">
                </div>

                <div class="form-group">
                  <label class="control-label" for="a3">A3</label>
                  <input class="form-control" id="a3" type="text" placeholder="<?=@$a[3]?>" disabled="">
                </div>

                <div class="form-group">
                  <label class="control-label" for="a4">A4</label>
                  <input class="form-control" id="a4" type="text" placeholder="<?=@$a[4]?>" disabled="">
                </div>

                <div class="form-group">
                  <label class="control-label" for="a5">A5</label>
                  <input class="form-control" id="a5" type="text" placeholder="<?=@$a[5]?>" disabled="">
                </div>

                <div class="form-group">
                  <label class="control-label" for="a1">A6</label>
                  <input class="form-control" id="a6" type="text" placeholder="<?=@$a[6]?>" disabled="">
                </div>

                <div class="form-group">
                  <label class="control-label" for="a1">A7</label>
                  <input class="form-control" id="a7" type="text" placeholder="<?=@$a[7]?>" disabled="">
                </div>

              </form>

          </div>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootswatch.js"></script>
  </body>
</html>
