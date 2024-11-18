<?php
    include 'connection.php';
    if(isset($_GET['id_prof'])){
        $id = $_GET[ 'id_prof'];
        $sql = mysqli_query($connectionBD, "SELECT * FROM professores WHERE id_prof = $id");
        $count = (is_array($sql)) ? count($sql) : 1;
        if($count){ 
            $n = mysqli_fetch_array($sql);
            $nome = $n['nome_ur'];
            $sobrenome = $n['sobrenome_ur'];
            $materia = $n['materia_ur'];
            
        }
    }

    if(isset($_POST['atualizar'])){
        $id = $_GET["id_prof"];
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $materia = $_POST["materia"];
        

        $queryUpdate = "UPDATE professores SET nome_ur = '$nome', sobrenome_ur = '$sobrenome', materia_ur = '$materia' WHERE id_prof = $id";
        $consulta = mysqli_query($connectionBD, $queryUpdate);
        header('location: tab2.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulário de Professores</title>
</head>
<body class="bg-secondary">             
    <br><br><br><br><br><br><br><br>
    <div class="container col-md-6 offset-md-3 bg-black p-5 rounded">
        <h1 class="text-light">Formulário de Professores</h1>
        <form action="update2.php" method="post">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" value="<?php echo $nome?>" name="nome">
                </div>
                <div class="col">
                    <input type="text" class="form-control" value="<?php echo $sobrenome?>" name="sobrenome">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                <input type="text" class="form-control" value="<?php echo $materia?>" name="materia">
                </div>
                <br>
                <div class="col">
                <button type="submit" class="btn btn-light" name="atualizar"><b>ATUALIZAR</b></button>
                </div>
                </div>
            <div class="col">
                
            </div>
            </div>
            
           
        
        </form>
    </div>
        <?php
        
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
