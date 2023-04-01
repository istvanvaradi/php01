<?php

//create new array in range of 0-20
//mix 'em up
//log out somehow
$a = range(0, 20);
    //it shuffels the existing array

for($i=0; $i<21; $i++){
    if($i%2===0){
        echo "<br>".$a[$i];
    }
}

//Circle areq
//t=r**2*Pi

$circle_array=range(1,10);
echo "<br> Masodik feladat(15)";
for($i=0; $i<21; $i++){
    if($circle_array[$i]**2*pi()>20){
        echo "<br>".$circle_array[$i];
    }
}

echo "<br>"."Harmadik feladat(16)";
