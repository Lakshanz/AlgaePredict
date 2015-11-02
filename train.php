<?php include "inc/train.php"; ?>
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
            <li>
              <a href="./">Predict</a>
            </li>
            <li class="active">
              <a href="./">Train</a>
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
            <h1>System Training</h1>
            <p class="lead">Use this page to train the models</p>
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
              <form class="form-horizontal" method="post" action="./train.php">
                <fieldset>
                  <legend>Insert Training Data</legend>
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
                    <label for="a1" class="col-lg-2 control-label">A1</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="a1" placeholder="A1">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="a2" class="col-lg-2 control-label">A2</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="a2" placeholder="a2">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="a3" class="col-lg-2 control-label">A3</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="a3" placeholder="a3">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="a4" class="col-lg-2 control-label">A4</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="a4" placeholder="a4">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="a5" class="col-lg-2 control-label">A5</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="a5" placeholder="a5">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="a6" class="col-lg-2 control-label">A6</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="a6" placeholder="a6">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="a7" class="col-lg-2 control-label">A7</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="a7" placeholder="a7">
                    </div>
                  </div>

                

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <!-- <button class="btn btn-default">Cancel</button> -->
                      <input type="submit" class="btn btn-primary" value="Add to Training Data">
                      <!-- <button type="submit" class="btn btn-primary">Submit to Predict</button> -->
                    </div>
                  </div>

                </fieldset>
              </form>
            </div>
          </div>
          <div class="col-lg-4 col-lg-offset-1">

              <a type="submit" class="btn btn-primary" href="./runtrain.php">Run Training Now</a>

          </div>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootswatch.js"></script>
  </body>
</html>
