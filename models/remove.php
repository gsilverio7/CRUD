<?php 

include 'connection.php';

$id = $_GET['id'];
$id = intval($id);

$stmt = $conn->prepare('DELETE FROM tecnologias WHERE id=?');

if ($stmt !== FALSE)
{
    $stmt->bind_param('i', $id);
    $stmt->execute();
    echo 'Registro apagado com sucesso!';
    echo '<a href="../">Retornar</a>';
}

else
{
    echo 'Houve um erro.';
}

//--Fecha Conexão
$conn->close();

?>