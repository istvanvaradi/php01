<?php
//Arrays


$myAray=[]; //empty array ||

var_dump($myAray);

$myAray=[1,2,3,4,5,];

echo "<pre>".var_export($myAray, true)."</pre>";


$days=["vasarnap","hetfo","kedd","szerda","csütörtök","pentek","szombat"];

echo "<pre>".var_export($days,true)."</pre>";

$answers = ["ture", "false","true"];

echo "<pre>".var_export($answers,true)."<pre>";


echo $days[4];

echo "<br>".date("Y-m-d H:i:s");

echo "<br>".$days[date("w")];


