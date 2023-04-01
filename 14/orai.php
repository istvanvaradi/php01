
<?php

    $host="localhost";
    $user="root";
    $password="";
    $dbname="classicmodels";


    $link=@mysqli_connect($host,$user,$password,$dbname) or die("HIBA".mysqli_connect_error());


    echo "<pre>";
    $qry="SELECT * FROM employees";
    $result=mysqli_query($link, $qry) or die(mysqli_error($link));

//1 sor kibontasa
    $row=mysqli_fetch_row($result);
    var_dump($row);
$row=mysqli_fetch_assoc($result);

//minden sor kibontasa(mind)

$table="<table border='1'> 
<tr>
<th>employenumber</th>
<th>fullname</th>
<th>employeenumber</th>
</tr>
";
while($row=mysqli_fetch_assoc($result)){

    $table .="<table border='1'> 
<tr>
<td>$row[employeeNumber]</td>
<td>$row[firstName]  $row[lastName]</td>
<td>$row[email]</td>
</tr>
";
}
//tabla zarasa
$table.= "</table>";

echo $table;