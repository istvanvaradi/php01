<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gyakorlás</title>
</head>
<body>
<?php
//Keszítsen egy ciklust, ami menü feliratokat rak ki.
//megoldás egy (a laza, bulizós)
for($i=1;$i<5;$i++) echo 'menü';//project DONE!!!! mehetünk bulizni ha csak 1 műveletet akarsz csinálni elhagyható a {} de inkább használd

//pro senior
$menu = [
    0 => [
        'title' => 'Home',
        'url' => 'home',
        'class' => 'fab fa-home'
    ],
    1 => [
        'title' => 'About',
        'url' => 'about',
        'class' => 'fa fa-user'
    ],
    2 => [
        'title' => 'Contact',
        'url' => 'contact',
        'class' => 'fa fa-envelope'
    ]
];//menüpontok tömbje

//menu html elemek nyitása
echo '<nav><ul class="main-menu">';
//menüpontok
/** @todo  órai feladat minden listaelem kapja meg az adott menüpont osztályát*/
for($i=0; $i < count($menu) ;$i++){//count
    echo '<li class="$menu[$i]["class"]"><a href="#'.$menu[$i]['url'].'">'.$menu[$i]['title']. '</a></li>';
    //echo $menu[$i];
}
//menu html elemek lezárása
echo '</ul></nav>';
?>
</body>
</html>
