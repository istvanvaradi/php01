<?php
//adattömbök kezelese +json
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
    2

];
echo "<pre>".var_export($users,true)."</pre>";

$table="
<table border='1'>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>is active?</th>
        <th>date</th>

";


foreach ($users as $id=>$user){
    //masodik verzio
    //var_dump($id,$user);
    //elvileg a kapott elemnek tömbnek kéne lennie
    //ha nem tömb akkor vagy skip vagy valamit kéne csinálni
    if(!is_array($user)){
        //trigger
        trigger_error(
            'Hiba az adathalmazban [index: '.$id.']',
            E_USER_WARNING
        );
        //return;
        //break;
        continue;//lökjük tovább a ciklus
    }
    //beillesztjük az adatsort
    $table .= "<tr>
                <td>{$id}</td>
                <td>{$user['name']}</td>
                <td>{$user['email']}</td>
                <td>".($user['isActive'] ? 'yes' : 'no')."</td>
                <td>{$user['time_created']}</td>
            </tr>";


}
    //ha nem array, nem loopolhato
  /*  if(is_array($user)) {
        $table .= "  <tr>
        <th>$id</th>
        <th>{$user["name"]}</th>
        <th>{$user["email"]}</th>
        <th>".($user['isActive'] ? 'yes' : 'no')."</th>
        <th>{$user["time_created"]}</th>
    </tr>";
    }else {
        // nem tul stilusos hibakezeles:die("gaz van");
        trigger_error(
            "Hiba az adathalmazban elem indexe: $id",
            E_USER_WARNING
        );


    }
}*/


$table.="</table>";


echo $table;




