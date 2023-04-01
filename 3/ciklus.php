<!DOCTYPE html>
<html>
<head>
    <title>Ciklusok</title>
</head>

<body>


<?php



$dice=rand(1,6);
echo "<br>A dobas erteke  {$dice}";
for($i=1;$i<=5; $i++){
    $dice=rand(1,6);
    echo "<br> $i A dobas erteke  $dice";
}


//old meg megegyszer
for($i=1;$i<=5; $i++){
    $dice=rand(1,6);

    if($dice%2===0){
        echo "<br> $i. <i style=color:red>A dobas erteke $dice</i> ";
    }else{
        echo "<br> $i. <i style=color:blue>A dobas erteke $dice</i> ";
    }
}

//concat
echo "<br>";
echo "<br>";
echo "this is a concatenated string ".$dice;



?>

</body>

</html>