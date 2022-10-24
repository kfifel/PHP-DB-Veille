<?php

    try {
        $connexion = require 'connect.php';
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        die("something was wrong".$e->getMessage());
    }
    $req = "INSERT INTO test(id,nom,prenom,email) VALUES(null , 'fifel', 'khalid', 'khalid@gmail.com' )";

    //create table if not exist
    $CreateTable = "CREATE TABLE IF NOT EXISTS test(
                    id      int     PRIMARY KEY ,
                    nom     varchar(30) not null ,
                    prenom  varchar(30) not null ,
                    email   varchar(40) not null 
                      )";
    $connexion->query($CreateTable);

    $req = "INSERT INTO test(id,nom,prenom,email) VALUES(null , 'fifel', 'khalid', 'khalid@gmail.com' )";

    $req2 = "SELECT * FROM test";
    $res =  $connexion->query($CreateTable);;
    echo $res->fetch();
//$response = $connexion->query($req2);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>YouCode</title>
</head>
<body>

    <table class="tab-content">
       <tr class="table-dark">
            <th> nom </th>
            <th> prenom </th>
            <th> email </th>
       </tr>
        <tr class="card-body">
            <td>h</td>
            <td>h</td>
            <td>h</td>
        </tr>

    </table>
</body>
</html>
