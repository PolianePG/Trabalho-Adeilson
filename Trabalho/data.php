<?php
include 'connection.php';

$sql = "SELECT
    COUNT(CASE WHEN turma_us = '2°B' THEN 1 END) AS seB,
    COUNT(CASE WHEN turma_us != '2°B' THEN 1 END) AS outrose
FROM
    alunos";

$result = $connectionBD->query($sql);
$row = $result->fetch_assoc();

$totalseB = $row['seB'];
$totaloutrose = $row['outrose'];
?>