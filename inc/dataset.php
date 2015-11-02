<?php
include "./lib/parseCSV.php";
//echo file_get_contents('dataset/Analysis.txt');
//exit;
$data = array();
$handle = fopen("R/dataset/Analysis2.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
    	//preg_replace('!\s+!', ' ', $input);
        $data[] = preg_replace('!\s+!', ' ',trim(fgets($handle)));
    }
} else {
    // error opening the file.
} 
fclose($handle);

$filedata = array();
foreach ($data as $key => $value) {
	$filedata[] = explode(" ", $value);
}

//echo "<pre>";
//print_r($filedata);
//exit;