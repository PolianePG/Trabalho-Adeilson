<?php
    //adicionar a conexão com o banco
    include 'connection.php';

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $materia = $_POST['materia'];

    $sql = mysqli_query($connectionBD, "INSERT INTO professores (nome_ur,sobrenome_ur, materia_ur) VALUES ('$nome','$sobrenome', '$materia')");

    if ($sql) {
        header ('Location: index2.php');
    }


?>