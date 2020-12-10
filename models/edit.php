<?php 

include 'connection.php';

$id = $_GET['id'];
$id = intval($id);
$nome = $_POST['name'];
$dominio = $_POST['dom'];
$projetos = $_POST['projects'];

$stmt = $conn->prepare('UPDATE tecnologias SET nome = ?, dominio = ?, projetos = ? WHERE id=?');

if ($stmt !== FALSE)

{
    $stmt->bind_param('sisi', $nome, $dominio, $projetos, $id);
    $stmt->execute();
    echo 'Registro editado com sucesso!';
    echo '<a href="../">Retornar</a>';
}

else
{
    echo 'houve um erro';
}



?>