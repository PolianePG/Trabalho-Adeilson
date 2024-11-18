<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulário de Alunos</title>
</head>
<body class="bg-secondary"> 
<br><br><br><br><br><br><br><br>
    <div class="container col-md-6 offset-md-3 bg-black p-5 rounded">
        <h1 class="text-light">Formulário de Alunos</h1>
        <form action="save.php" method="post">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control"  placeholder="Nome:" id=""  name="nome">
                </div>
                <div class="col">
                    <input type="text" class="form-control"  placeholder="Sobrenome:" id="" name="sobrenome">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control"  placeholder="Turma:" id="" name="turma">
                </div>
                <br>
                <div class="col">
                <button type="submit" class="btn btn-light"><b>SALVAR</b></button>
                <a href="tab1.php" class="btn btn-warning "><b>RESULTADO</b></a>
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
