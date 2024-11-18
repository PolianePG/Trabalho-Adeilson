<?php
    //adicionar a conexão com o banco
    include 'connection.php';

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $turma = $_POST['turma'];

    $sql = mysqli_query($connectionBD, "INSERT INTO alunos(nome_us,sobrenome_us, turma_us) VALUES ('$nome','$sobrenome', '$turma')");

    if ($sql) {
        header ('Location: index.php');

    }


?>