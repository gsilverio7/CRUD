<?php 

include 'models/connection.php';

$id = $_GET['id'];
$id = intval($id);

$url = "./models/edit.php?id=" . $_GET['id'];
$url2 = "mostrar.php?id=" . $_GET['id'];

$stmt = $conn->prepare('SELECT * FROM tecnologias WHERE id=?');
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();

$row = $result->fetch_assoc();

$nome = $row['nome'];
$dominio = $row['dominio'];
$projetos = $row['projetos'];

//--Fecha Conexão
$conn->close();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Registros</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        
        <h2>Editar Registro</h2>

        <form method="POST" action=<?php echo $url;?>>
        
                <input id="name" name="name" type="text" placeholder="Nome da Tecnologia" value=<?php echo $nome;?> required>
                <input id="dom" name="dom" type="number" min="0" max="100"  placeholder="Domínio da Tecnologia em %" value=<?php echo $dominio;?> required>   
                <textarea id="projects" name="projects" placeholder="Projetos já concluídos usando a Tecnologia" > <?php echo $projetos;?> </textarea>    
                <button type="submit" class="button">Send</button>

        </form>

        <h4><a href=<?php echo $url2;?>>Voltar</a></h4>
        
    </div>
    
</body>
</html>