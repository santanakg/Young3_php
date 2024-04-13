<?php
include('../connections/connnection.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="conteiner">
    <div class="row justify-content-center">
        
        <table class="table table table-bordered border-primary table-info">
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Data de Nascimento</th>
            </tr>
            <?php
              // REPETIR ALGUM CÓDIGO
              include('pegar_dados.php');
    
            ?>
        </table>

    </div>
</body>
</html>