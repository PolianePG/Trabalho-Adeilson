<?php
    include 'connection.php'; 

    $id = $_GET['id_prof'];
     
    if (isset ($_GET['id_prof'])) {
        $sqlDelete = mysqli_query($connectionBD, "DELETE FROM professores WHERE id_prof = {$id}") 
        or die (mysqli_error($connectionBD));

        header('location:tab2.php');
    }
?>