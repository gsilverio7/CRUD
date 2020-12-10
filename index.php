<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>GSS' CRUD</title>
</head>
<body>

    <div class="container">

        <h2>Tecnologias Conhecidas</h2>
        
        <h4><a href="novo.php">Adicionar Registro</a></h4>

        <?php 
            include './models/list.php';
        ?>

    </div>
    
</body>
</html>