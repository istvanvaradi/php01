<?php
//here just logic #
echo "<pre>".var_export($_POST,return: true)."</pre>";
$name=filter_input(INPUT_POST,"name");

$name_error="";
//error handling
if(!empty($_POST)){//miert nem sima ($_POST
    if (!$name) {
        var_dump($name);
        $name_error= "A név mezö kitöltese kötelezö";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ürlapok</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        form{
            max-width: 450px;
            margin: 0 auto;
            padding: 1em;
        }

        label{
           display: flex;
            flex-flow: column nowrap;
            gap: 10%;
            margin: .5em 0;

        }
    </style>
</head>
<body>
<form method="post">
    <label>
        <span>Név</span>
        <input type="text" name="name" placeholder="John Doe" >
        <?php echo $name_error; ?>
    </label>
    <button>Mehet</button>
</form>
</body>

</html>