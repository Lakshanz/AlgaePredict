<?php
exec('Rscript R/CheckAccuracy.R 2>&1', $output);

$output = explode(" ", $output[3]);

$k = 0;
$a = array();

foreach ($output as $key => $value) {
  if($value){
    $a[$k] = $value;
    $k++;
  }
}

//echo "<pre>";
//print_r($a);