<?php


$dir="test/";
$fileName="foods.json";

$date=$date = date('Y-m-d', strtotime("+1 day"));
$foods=
    [
        [
          "name"=>"Becsi Szelet",
          "price"=>3,
          "inStock"=>true,
          "expire_date"=>$date,

        ],

        [
            "name"=>"Pierogie",
            "price"=>2,
            "inStock"=>true,
            "expire_date"=>$date,

        ],
        [
            "name"=>"Stuffed Cabbage",
            "price"=>13,
            "inStock"=>false,
            "expire_date"=>$date,

        ]
    ];




echo "<pre>".var_export( $foods, true)."</pre>";

$jsonFood=json_encode($foods);


file_put_contents($dir.$fileName,$jsonFood);

echo $jsonFood;


$readFromFile="";
if(file_exists($dir.$fileName)){
    $readFromFile=file_get_contents($dir.$fileName);
}
// ASSOCIATIVE TRUE !!!!!!!! NE HAGYD KI
$foodsFromjson=json_decode($readFromFile,associative: true);

echo "<pre>".var_export( $foodsFromjson, true)."</pre>";


if($foods===$foodsFromjson) echo "They are the same";
