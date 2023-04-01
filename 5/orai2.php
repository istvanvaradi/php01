<?php

$test=[];

for($i =1; $i<=10; $i++){
    $test[] = rand(1,100);

}
 sort($test);
echo "<pre>".var_export($test,true);


rsort($test);
echo "<pre>".var_export($test,true);



shuffle($test);
echo "<pre>".var_export($test,true);

//tömb bejarasa

foreach ($test as $k =>$v){
    echo "<br> Aktualis kulcs: {$k }| ertek: {$v}";
}
