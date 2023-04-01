<?php
//post feldolgozás, logika...
require "form.php";//űrlap betöltése
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP alapok - include-require</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        form {
            max-width: 450px;
            margin: 0 auto;
            padding: 1em;
        }

        label:not(.c-box) {
            display: flex;
            flex-flow: column nowrap;
            gap: .25em;
            margin: .5em 0;
        }

        .error {
            color: red;
            font-style: italic;
            font-size: .8em;
        }
    </style>
</head>
<body>
<?php
if(filter_input(INPUT_GET,'action') === 'thankyou'){
    echo 'Kéne valami köszönő üzenet!';
}
?>
<h1>Egyszerű ürlap</h1>

<?php
//egy file betöltése (mintha ide lenne gépelve!)
//include "forms.php";
//include_once "form.php";//ha még nem volt betöltve a file akkor betölti ide
//require "forms.php";//ha nincs meg a file, akkor nem megy tovább a kód
//require_once "form.php";//ha még nem volt betöltve a file akkor betölti ide

/** @var $form - a form.phpból jön*/
echo $form; //a form.phpból jön, ezt a storm nem látja->megoldás annotation
?>

<section>
    <h2>Lorem ipsum dolor.</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi commodi earum error harum laborum
        modi placeat quod suscipit vel?</p></section>
</body>
</html>