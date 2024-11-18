<?php
include 'read2.php';
include 'connection.php';
include 'data2.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tabela de Professores</title>
</head>
<body class="bg-secondary">
<br>
    <div class="container col-md-6 offset-md-3">
    <table class="table table-hover border border-1 border-secondary rounderd-3">
            <thead>
                <tr>
                    <th scope="col">ID Usuário</th> 
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Matéria</th>
                    <th scope="col">Funções</th>            
                </tr>
            </thead>
            <?php while ($usuario = mysqli_fetch_assoc($listar3SQL)) { ?>
                <tbody>
                    <tr>
                        <td><?php echo $usuario['id_prof']?></td>
                        <td><?php echo $usuario['nome_ur']?></td>
                        <td><?php echo $usuario['sobrenome_ur']?></td>
                        <td><?php echo $usuario['materia_ur']?></td>
                        <td>
                            <a href="delete2.php?id_prof=<?php echo $usuario['id_prof']; ?>" class="btn btn-sm btn-danger">Excluir</a>
                            -
                            <a href="update2.php?id_prof=<?php echo $usuario['id_prof']; ?>" class="btn btn-sm btn-success">Atualizar</a>
                        </td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
        <div>
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col">
                <a href="index.php" class="btn btn-light"></i><b>VOLTAR</b></a>
                <a href="home.php" class="btn btn-dark"><i class="bi bi-house-fill"></i></a>
            </div>
            </div>
            </div>
     
        <div class="row">
            <div class="col">
                <b>GRÁFICO DAS MATÉRIAS</b>
            </div>
        </div>
        <br>


        <!-- Gráfico abaixo da tabela -->
        <div class="row">
            
            <div class="col">
                <canvas id="myChart" style="width: 50%; max-width: 400px;"></canvas>
            </div>
        </div>
    </div>
    

    <script>
        
        const ctx = document.getElementById('myChart').getContext('2d');
        
        // Recebe os valores PHP do banco de dados
        const totalse = <?php echo $totalse; ?>;
        const totaloutros = <?php echo $totaloutros; ?>;

        // Configura o gráfico
        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Matemática', 'Outras matérias'],
                datasets: [{
                    label: 'Número de matérias registradas',
                    data: [totalse, totaloutros],
                    backgroundColor: [
                        'rgba(255,140,0)',
                        'rgba(255,215,0)'
                    ],
                    borderColor: [
                        'black',
                        'black'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
        plugins: {
            legend: {
                labels: {
                    color: 'black', // Define a cor das labels
                    font: {
                        size: 14, // Tamanho da fonte das labels
                        family: 'Arial', // Fonte das labels
                        weight: 'bold' // Peso da fonte
                    }
                }
            }
        },
        responsive: true,
        maintainAspectRatio: false
    }
        });
    </script>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>