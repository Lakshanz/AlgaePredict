<?php
if(isset($_POST['season'])){

  $data = array();

  foreach ($_POST as $key => $value) {
    if($value == ""){
      $data[$key] = "XXXXXXX";
    }
    else{
      $data[$key] = strtolower($value);
    }
  }

  $text = "";
  $i = 0;

  foreach ($data as $key => $value) { 
    if($i == 0){ 
      $text = $value; 
    }
    else{ 
      $text .= "    $value"; 
    }

    $i++;
  }

  $fp = fopen('dataset/data.txt', 'w');
  fwrite($fp, $text);
  fclose($fp);

  $csvPath = getcwd()."\\dataset\\data.txt";   
  exec('Rscript "R/AlgaePredict.R" "'.$csvPath.'" 2>&1', $output);
  $output = explode(" ", $output[2]);
  unset($output[0]);

  $k = 1;
  $a = array();

  foreach ($output as $key => $value) {
    if($value){
      $a[$k] = $value;
      $k++;
    }
  }


  /*
  echo "<pre>";
  print_r($a);
  echo $text."\n\n";
 
  print_r($output);
  echo "</pre>";
  exit;*/
}else{
   //echo "no";
   //exit;
}