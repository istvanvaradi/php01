<?php
    if(!empty($_POST)){
        $errors=[];
        //..
        echo "<pre>".var_export($_POST,true)."</pre>";
        //nev inimum 3 karakter


        //születesi ev 1920-2005 között video feb 28 masodik vege
        $birth_year=filter_input(INPUT_POST,"birth_year");
        settype($birth_year,"integer");
        if($birth_year<1920|| $birth_year>2005){
            $errors["birth_year"]="<span class='error'>Kötelezö megadni !(1920-2005 között)!</span>";

        }
        $birth_year=filter_input(INPUT_POST,"birth_year",FILTER_VALIDATE_INT);
        //szures a szuletesi evre

        //terms legyen kipipalva
        if(!filter_input(INPUT_POST,var_name: "terms")){
            $errors["terms"]="<span class='error'>Kötelezö bejelölni!</span>";
        }
        if(!filter_input(INPUT_POST,var_name: "number")){
            $errors["number"]="<span class='error'>Kötelezö bejelölni!</span>";
        }

        if(empty($errors)){
            //exit("OK");
            echo "ok!";
        }
        if(filter_input(INPUT_POST,var_name: "beer")){
            echo "Sörözne";
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

    <label>
        <span>Születesi ev</span>
        <input type="text"
               name="birth_year"
               placeholder="1908"
               value="<?php echo filter_input(INPUT_POST,var_name: "birth_year");?>"
        >
        <?php
        echo $errors["birth_year"] ?? "";
        ?>
    </label>
    <label class="c-box">
        <!-- checked allapot megörzese -->
        <?php
        //27.00-nal a 28a februar

        /*if(filter_input(INPUT_POST,var_name: "terms") !==null){
            $terms_checked= "checked";
        }else{
            $terms_checked=" ";
        }*/
        $terms_checked=filter_input(INPUT_POST,"terms")? "checked": "";
        ?>
        <input  type="checkbox" name="terms" value="1" <?php echo $terms_checked; ?>
        <span>
            Elolvastam es megertettem az
            adatkezelesi tajekoztatoban foglaltakat
            <sup>*</sup>
            <?php
            echo $errors["terms"] ?? "";
            ?>
        </span>
    </label>
    <label>
        <span>Adj meg egy szamot 1-90 között</span>
        <input type="text" name="number" placeholder="1-90" value="<?php echo filter_input(INPUT_POST,var_name: "number");?>">
        <?php
        echo $errors["number"] ?? "";
        ?>
    </label>
    <label class="c-box">
        <!-- checked allapot megörzese -->
        <?php
        //27.00-nal a 28a februar

        /*if(filter_input(INPUT_POST,var_name: "terms") !==null){
            $terms_checked= "checked";
        }else{
            $terms_checked=" ";
        }*/
        $beer_checked=filter_input(INPUT_POST,"beer") ? "checked": "";
        ?>
        <input  type="checkbox" name="beer" value="1" <?php echo $beer_checked; ?>
        <span>
         Szereted a sört?
            <sup>*</sup>
        </span>
    </label>
    <hr>
    <button class="btn btn-default"  name="valami" value="test">gyiii</button>
</form>
</body>

</html>