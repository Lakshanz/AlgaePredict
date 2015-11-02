<?php
include "./lib/parseCSV.php";

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
      $text = " ".$value; 
    }
    else{ 
      $text .= "     $value"; 
    }

    $i++;
  }

  $txt = file_get_contents('R/dataset/Analysis2.txt');
  $fp = fopen('R/dataset/Analysis2.txt', 'w');
  fwrite($fp, $txt."\n".$text);
  fclose($fp);

  echo "done";
  exit;
  /*
  echo "<pre>";
  print_r($a);
  echo $text."\n\n";
 
  print_r($output);
  echo "</pre>";
  exit;*/
}else{
	//
}