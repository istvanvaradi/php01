<?php
//egy test mappaba szeretnek dolgozni
$dir= 'test/';


if(!is_dir($dir)){
    mkdir($dir,0755,true);
}



//egy users.data állományba tennénk az adatokat
$filename = 'users.data';
$users = [
    [
        'name' => 'Horváth György',
        'email' => 'hgy@iworkshop.hu',
        'isActive' => true,
        'time_created' => '2023-03-02 17:12:00'
    ],
    [
        'name' => 'Nameless One',
        'email' => 'nameless@one.one',
        'isActive' => true,
        'time_created' => '2023-03-02 17:14:00'
    ],
    [
        'name' => 'John Doe',
        'email' => 'john@doe.doe',
        'isActive' => false,
        'time_created' => date('Y-m-d H:i:s')
    ],
];
echo '<pre>'.var_export($users,true).'</pre>';
//file_put_contents($dir.$fileName,$fileContentile);
$fileContent=$users;
// //igy nem jo de forEach esetleg mukodhetne
// //file_put_contents($dir.$file,$fileContent);
// // nem primitiv adat atalakitasa primitivve(string)

// //irjuk ki a users 2 dim tomb tartalmat fileba

 $serializedContent=serialize($users);
 var_dump($serializedContent);

 file_put_contents($dir.$filename,$serializedContent);
//ha ki volt irva visszaolvashato$readFromFile="";
$readFromFile="";
 if(file_exists($dir.$filename)){
     $readFromFile=file_get_contents($dir.$filename);
 }

$usersFromFile=unserialize($serializedContent);

echo "<pre>".var_export($usersFromFile,true)."</pre>";

// if($users===$usersFromFile){
//     echo "Ezek ugyanazok ";
// }


echo  "<h2>JSON</h2>";

$jsonUsers=json_encode($users);
var_dump($jsonUsers);

//jsonba mentenei !!!!!!!ez hianyzott eddig
$filename="users.json";
file_put_contents($dir.$filename,$jsonUsers);

if(file_exists($dir.$filename)){
    $readFromFile=file_get_contents($dir.$filename);
}

$usersFromFile=json_decode($readFromFile, associative: true);

echo "<pre>".var_export($usersFromFile,true)."</pre>";

if ($usersFromFile==$users) echo "teljesen egyeynek";

