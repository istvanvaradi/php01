<!DOCTYPE html>
<html>
<head>
    <title>Feladat</title>
</head>

<body>

<?php

//kocka feszine

$squareLength=2;

$surface=6*$squareLength**$squareLength;

echo "A kocka felszine ".$surface."m2";

//
echo "<br>";
//2. kör terfogata
$r=2;
$v=4/3*$r**3*pi();


$a=2;
$b=5;

$c=sqrt($a**2+$b**2);
echo "<br>";
echo $c;

//3szög
echo "<br>";
echo "a kor terfogata ${v}";

//4.afa tartalom
echo "<br>";
$product=200;
$tax=15;
$taxedProduct=$product*($tax/100);

echo "The tax on your product is ".$taxedProduct." huf";
echo "<br>";
//5.idealis testsuly

$height=165;

$ideal=0.9*($height-100);

echo "your ideal weight is ".$ideal." kg";
echo "<br>";


//6.html szo pirossal
echo "<div>

<p style='color:red;font-family: Arial,sans-serif;font-size:7px;'>HELLO</p>
</div>";
echo "<br>";
///7.anchor tag GOOGLE
echo "<a href='https://www.google.com/' target=”_blank”  >GOOGLE</a>";

echo "<br>";
//8.img tag
echo "<img src='https://i.natgeofe.com/k/6496b566-0510-4e92-84e8-7a0cf04aa505/red-fox-portrait_square.jpg' width='200px'height='300'>";
echo "<br>";

echo "<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
  </tr>

</table>";

//9.


//11.ciklus atlagrol

$max=10;
$sum=0;
for($i=1; $i<=$max; $i++){
$sum+=$i;
}

($i);
$avg=$sum/$max;
var_dump($avg);

echo "<br>";


$max=20;
for($i=1; $i<=$max; $i++){
    $num=$i**2;

    if($num>30){
        echo "<li> $num";
    }

}



?>

</body>

</html>