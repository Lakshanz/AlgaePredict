<?php include "inc/accuracy.php"; ?>
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
            <li>
              <a href="./dataset.php">Train Dataset</a>
            </li>
            <li class="active">
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
            <h1>System Accuracy</h1>
            <p class="lead">This page shows current best accuracy can provide by system by selecting most suitable model for each algae type</p>
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
                    <th></th>
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
                  <tr>
                    <td>NMSE (normalized mean square error)</td>
                    <td><?=$a[0]?></td>
                    <td><?=$a[1]?></td>
                    <td><?=$a[2]?></td>
                    <td><?=$a[3]?></td>
                    <td><?=$a[4]?></td>
                    <td><?=$a[5]?></td>
                    <td><?=$a[6]?></td>
                  </tr>
                  <tr>
                    <td>Accurate in Precent</td>
                    <td><?=(100 - round($a[0]*100))?>%</td>
                    <td><?=(100 - round($a[1]*100))?>%</td>
                    <td><?=(100 - round($a[2]*100))?>%</td>
                    <td><?=(100 - round($a[3]*100))?>%</td>
                    <td><?=(100 - round($a[4]*100))?>%</td>
                    <td><?=(100 - round($a[5]*100))?>%</td>
                    <td><?=(100 - round($a[6]*100))?>%</td>
                  </tr>
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
