

<?php
$dir="test/";

if(!empty($_POST)){
    $errors=[];
    //..
    echo "<pre>".var_export($_POST,true)."</pre>";
    //nev inimum 3 karakter

    if(strlen(filter_input(INPUT_POST,"name"))<=3){
        $errors["name"]="<span class='error'>Kötelezö mezo, 3 karakter min!!</span>";
    }

    $emailAddress=filter_input(INPUT_POST,"email");
    if (!filter_var($emailAddress,FILTER_VALIDATE_EMAIL)){
        $errors["email"]="<span class='error'>Invalid e-mal format!</span>";
    }

    if(empty($errors)){
        //exit("OK");
        echo "ok!";
    }

    $name=filter_input(INPUT_POST,"name");


    $myArray=[
        'name' => $name,
        'email' => $emailAddress,
        'is_active' => false,
        'time_created' => date("Y-m-d H:i:s")

    ];

    echo "<pre>".var_export($myArray,true)."</pre>";


    //definialni a direket ...es szepen berakni a user.databa

    $filename="users.data";

    //miert van itt 2 vesszö??
    $putUsers=file_put_contents($dir.$filename,implode(";",$myArray));


    unset($myArray);

}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
            gap:.25em;
            margin:.5em 0;
        }
        .error {
            color:red;
            font-style: italic;
            font-size:.8em;
        }
    </style>
</head>
<body>
<form method="post">
    <label for="name"> Név (min 3 karakter)</label>
    <input
        type="text"
        name="name"
        placeholder="John Doe"
        value="<?php echo filter_input(INPUT_POST,var_name: "name");?>""
    >
    <?php
    echo $errors["name"] ?? "";
    ?>
    <label>
        <span>E-mail</span>
        <input type="text"
               name="email"
               placeholder="abc@mailon.hu"
               value="<?php echo filter_input(INPUT_POST,var_name: "email");?>"
        >
        <?php
        echo $errors["email"] ?? "";
        ?>
    </label>
    <hr>
    <button class="btn btn-default"  name="valami" value="test">gyiii</button>
</form>
</body>

</html>