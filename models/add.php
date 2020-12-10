<?php 

include 'connection.php';

$nome = $_POST['name'];
$dominio = $_POST['dom'];
$projetos = $_POST['projects'];

$smtp = $conn->prepare('INSERT INTO tecnologias (nome, dominio, projetos) VALUES (?, ?, ?)');

if ($smtp !== FALSE)
{
    $smtp->bind_param('sis', $nome, $dominio, $projetos);
    $smtp->execute();
    echo 'Novo registro criado com sucesso!';
    echo '<a href="../">Retornar</a>';
}

else
{
    echo 'Houve um erro';
}



?>