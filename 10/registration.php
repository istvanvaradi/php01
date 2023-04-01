<?php
//hazi feladat
if(!empty($_POST)){
    $errors=[];
    $email=filter_input(INPUT_POST,"email");
    $name=filter_input(INPUT_POST,"name");
    $userReg=
        [
            'name' => $name,
            'email' => $email,
            'isActive' => false,
            'time_created' => date('Y-m-d H:i:s')
        ];


    if(strlen(filter_input(INPUT_POST,"name"))<=3){
        $errors["name"]="<span class='error'>Kötelezö mezo, 3 karakter min!!</span>";
    }

    $emailAddress=filter_input(INPUT_POST,"email");
    if (!filter_var($emailAddress,FILTER_VALIDATE_EMAIL)){
        $errors["email"]="<span class='error'>Invalid e-mal format!</span>";
    }


    echo  "<pre>".var_export($userReg,true)."</pre>";

    $filename="users.json";


    $usersJson=json_encode($userReg);

    file_put_contents( "./test/".$filename,$usersJson);
    $readUser="";
    if(file_exists("users.json")){
        $readUser=file_get_contents("test/".$filename,true);
    }
    if(empty($errors)){
        //exit("OK");

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
    <title>Registration</title>
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



<pre>



    a tárolás helye legyen a test/users.json

    -helyes űrlap adatok esetén fix [false] isActive és a helyes adatok keletkezésének időpontja (time_created) kitöltése után (adatok tisztása -> létrehozol egy $user tömböt a kapott/gyártott adatokkal
    -ha létezik a users.json beolvasod, ha nem létezik az adott user lesz az első eleme
    --extra: ha megoldod hogy úgyis végbemenjen a folyamat hogy test mappa sincs

</pre>


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