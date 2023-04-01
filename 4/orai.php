<?php
//PURE PHP file

echo "hello world";
echo  "<h1> Müveletek primitivekkel </h1>";

// 1 a,b,c  derekszogü haromszög kerületet
 $a=3;
 $b=4;
 $c=5;

 $sideLength= $a + $b +$c; //aritmitikai operatorok
echo "</pre>";
echo "A {$a}m, {$b}m, es {$c}m oldalu harmszög kerülete:";
echo "</pre>";
echo "{$sideLength}m";
echo "</pre>";

//haromszog terulete (a+b)

$area =null;
echo "</pre>";
echo "terulet";
$area=($a*$a+$b*$b)/2;
echo "</pre>";
echo "area is";
echo "</pre>";
echo $area;
echo "</pre>";
//hatvanyozas
//$a**2; //negyzetre emeles

//veletlen szam generalasa
$number= rand(3,114); //ha van parameter 2 kell, ha egy parameter van hibat jelez
echo "</pre>";
var_dump($number);
echo "</pre>";

//kockadobas
$dice=rand(1,6);
echo "</pre>";
var_export($dice,true);

echo "</pre>";

//valtozo kiirasa standard outputre

var_export($number,true);

echo "</pre>";

//concatintaion :


//tipusok
echo "<pre>";
var_dump("",null,false,0);
echo "<pre>";


//mondjuk meg hogy paros-e egy szàm

if($number%2===0){
//paros
    echo "A szam paros";
}else{
//paratlan
    echo "A szam paratlan";
}