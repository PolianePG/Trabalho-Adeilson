<?php
include 'connection.php';

$sql = "SELECT
    COUNT(CASE WHEN materia_ur = 'Matemática' THEN 1 END) AS se,
    COUNT(CASE WHEN materia_ur != 'Matemática' THEN 1 END) AS outros
FROM
    professores";

$result = $connectionBD->query($sql);
$row = $result->fetch_assoc();

$totalse = $row['se'];
$totaloutros = $row['outros'];
?>