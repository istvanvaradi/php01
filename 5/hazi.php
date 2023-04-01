<?php


//hazi feladat 1 ""menu"


for($i=0;$i<5; $i++){
    echo "<p>menü</p>";
}

/*Készítsünk programot, amely kiszámolja az első 100 darab. természetes
szám összegét, majd kiírja az eredményt. (Az összeg kiszámolásához
vezessünk be egy változót, amelyet a program elején kinullázunk, a
ciklusmagban pedig mindig hozzáadjuk a ciklusváltozó értékét, tehát
sorban az 1, 2, 3, 4, ..., 100 számokat.)*/

$numSum=0;

for($i=1;$i<=100; $i++){
   $numSum+=$i;
}

echo "The sum of the first 100 natural numbers(int) is " . $numSum;//5050 expected





//task 3 multiplication
$multiplySum=1;
for($i=1;$i<=7; $i++){
    $multiplySum*=$i;
}

echo "<br> The first 7 numbers multiplied value is  : $multiplySum";



$sumEven=0;

for($i=1;$i<=200; $i++){

    if($i%2===0){
        $sumEven+=$i;

    }
}

echo "<br>The sum of the  first 100 even numbers is  $sumEven";



$sumOdd=0;

for($i=1;$i<=200; $i++){

    if($i%2!==0){
        $sumOdd+=$i;

    }
}

echo " <br>The sum of the  first 100 odd numbers is $sumOdd";

