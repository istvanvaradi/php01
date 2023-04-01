<?php
/*

 */

$dir="test/";
/*if(!is_dir($dir)){
    mkdir($dir,0755);}*/


//mindegy h file vagy directory
if (!file_exists($dir)){
    mkdir($dir,0755);

}


//itt mar letezik a mappa

$content="Hello World!";

//eltarolni az erteket egy testcontent.txt nevu fileban a test mappan belul
$filename="testcontent.txt";
$result = file_put_contents( $dir.$filename,$content.PHP_EOL, FILE_APPEND);

$testArray = [2321,"szvg",00123];
/*
$filename="test.data";
var_dump($testArray);
//echo ($testArray);
//a aile name a valtozo amiben mar van / ezert lehet siman concatolni!!!
file_put_contents($dir.$filename,implode(",",$testArray));

$convert = implode(";",$testArray);
$re = explode(";",$convert);
if($testArray === $re) echo "egyeznek"; */

//adatok visszaolvasasa filebol

$dataFromFile=file_get_contents($dir.$filename);
echo "$dataFromFile";
$myArray=explode(PHP_EOL,$dataFromFile);
echo "<pre>".var_export($myArray, true)."</pre>";

$ruander = file_get_contents("https://ruander.hu");
echo $ruander;

