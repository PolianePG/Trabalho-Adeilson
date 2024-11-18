<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbName = "escola";

    $connectionBD = mysqli_connect($server,$user,$password,$dbName);
    if (!$connectionBD) {
        echo "Erro ao conectar ao banco!";
    }/*else{
        echo "Conectado o banco!";  
    }*/

?>
