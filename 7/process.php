<?php

echo "Feldolgozas";


// A $GET bemutatasa


echo "<pre>".var_export($_GET,return: true)."</pre>";

$name=filter_input(INPUT_GET,"name");
var_dump($name);


// POST superglobal
echo "<pre>".var_export($_POST,return: true)."</pre>";
$name=filter_input(INPUT_POST,"name");
var_dump($name);

//REQUEST
echo "<pre>".var_export($_REQUEST,return: true)."</pre>";

$hero=filter_var($_REQUEST["name"]);
var_dump($hero);

