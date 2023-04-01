<?php
//ez a file adja az űrlap stringet és a logikát egyben, valahol majd egy $form elemet ki kell írni (ahol includeolod ezt a filet a megfelelő helyen)
//logika
if (!empty($_POST)) {
    $errors = [];

    //név, kötelező
    $name = trim(filter_input(INPUT_POST, 'name'));
    if (!$name) {
        $errors['name'] = '<span class="error">nem jó a név</span';
    }
// email
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if (!$name) {
        $errors['email'] = '<span class="error">Hibás formátum!</span';
    }

    //jelszó min 6 karakter a két jelszónak egyeznie kell
    $password = filter_input(INPUT_POST, 'password');
    $repassword = filter_input(INPUT_POST, 'repassword');

    if(mb_strlen($password) < 6){
        $errors['password'] = '<span class="error">Hibás formátum! minimum 6 karakter!</span';
    }elseif($password !== $repassword){
        $errors['repassword'] = '<span class="error">A jelszavak nem egyeztek!</span';
    }else{
        //a jelszó megfelelő, át kell alakítani tároláshoz, vissza nem alakítható formában (encrypt, de nincs decrypt algoritmus)
        //md5
        /*$secret_key = 'S3cR3t_K3Y!';
        $password = md5($password.$secret_key);*/
        /*for($i=0;$i<50;$i++){
            $password = md5($password);
        }*/
        $password = password_hash($password,PASSWORD_BCRYPT);
        var_dump($password);

    }


    if (empty($errors)) {
        $user = [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'time_created' => date('Y-m-d H:i:s'),
            'is_active' => false
        ];

        //műveletek a jó adatokkal (pl file-ba írás, db -be mentés (köv órai anyag)
        //echo '<pre>'.var_export($_SERVER,true).'</pre>';
        echo '<pre>'.var_export($user,true).'</pre>';
        //átirányítás:
        //header("location:".$_SERVER['PHP_SELF'].'?action=thankyou');//az aktuális filera irányítunk (jelen esetben ami hordozza , azza az index.php)
        //exit;//biztonsági állj, de elvileg ide már el se jutunk, ha megy az átirányítás rendben

    }
}

//űrlap/hibajelzések
$form = '<form method="post">';
//nev
$form .= '<label>
        <span>Név<sup>*</sup></span>
        <input type="text" name="name" value="' . filter_input(INPUT_POST, 'name') . '" placeholder="Nakivagyok Ödön">' . ($errors['name'] ?? '') . '        
        </label>';
//email
$form .= '<label>
        <span>email<sup>*</sup></span>
        <input type="text" name="email" value="' . filter_input(INPUT_POST, 'email') . '" placeholder="a@b.c">' . ($errors['email'] ?? '') . '
    </label>';

//jelszó 1
$form .= '<label>
    <span>jelszó<sup>*</sup></span>
    <input type="password" name="password" value="" placeholder="******">'
    . ($errors['password'] ?? '') . '
</label>';
$form .= '<label>
    <span>jelszó mégegyszer<sup>*</sup></span>
    <input type="password" name="repassword" value="" placeholder="******">'
    . ($errors['repassword'] ?? '') . '
</label>';

$form .= '<button>Regisztráció</button>
</form>';//űrlap zárása+gomb
/*//kiírás egy lépésben: majd kírjuk ahol kell
echo $form;*/