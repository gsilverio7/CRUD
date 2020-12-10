<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Registros</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        
        <h2>Adicionar Novo Registro</h2>

        <form method="POST" action="./models/add.php">

                <input id="name" name="name" type="text" placeholder="Nome da Tecnologia" required>
                <input id="dom" name="dom" type="number" min="0" max="100"  placeholder="Domínio da Tecnologia em %" required>   
                <textarea id="projects" name="projects" placeholder="Projetos já concluídos usando a Tecnologia"></textarea>    
                <button type="submit" class="button">Send</button>

        </form>

        <h4><a href="index.php">Voltar</a></h4>
        
    </div>
    
</body>
</html>