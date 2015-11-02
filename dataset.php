<?php include "inc/dataset.php"; ?>
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
            <li>
              <a href="./train.php">Train</a>
            </li>
            <li class="active">
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
          <div class="col-lg-12 col-md-12 col-sm-12">
            <h1>Train Dataset</h1>
          </div>
        </div>
      </div>

      <!-- Tables
      ================================================== -->
      <div class="bs-docs-section">

        <div class="row">
          <div class="col-lg-12">
            <!-- <div class="page-header">
              <h1 id="tables">Tables</h1>
            </div> -->

            <div class="bs-component">
              <table class="table  table-bordered table-hover ">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Season</th>
                    <th>Size</th>
                    <th>Speed</th>
                    <th>mxPH</th>
                    <th>mnO2</th>
                    <th>Cl</th>
                    <th>NO3</th>
                    <th>NH4</th>
                    <th>oPO4</th>
                    <th>PO4</th>
                    <th>Chla</th>
                    <th>A1</th>
                    <th>A2</th>
                    <th>A3</th>
                    <th>A4</th>
                    <th>A5</th>
                    <th>A6</th>
                    <th>A7</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($filedata as $key => $value) { ?>
                  <tr>
                    <th><?=$key+1?></th>
                    <th><?=$value[0]?></th>
                    <th><?=$value[1]?></th>
                    <th><?=$value[2]?></th>
                    <th><?=$value[3]?></th>
                    <th><?=$value[4]?></th>
                    <th><?=$value[5]?></th>
                    <th><?=$value[6]?></th>
                    <th><?=$value[7]?></th>
                    <th><?=$value[8]?></th>
                    <th><?=$value[9]?></th>
                    <th><?=$value[10]?></th>
                    <th><?=$value[11]?></th>
                    <th><?=$value[12]?></th>
                    <th><?=$value[13]?></th>
                    <th><?=$value[14]?></th>
                    <th><?=$value[15]?></th>
                    <th><?=$value[16]?></th>
                    <th><?=$value[17]?></th>
                  </tr>
                <?php } ?>
                </tbody>
              </table> 
            </div><!-- /example -->
          </div>
        </div>
      </div>

      </div>


    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootswatch.js"></script>
  </body>
</html>
