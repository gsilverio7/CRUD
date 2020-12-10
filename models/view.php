<?php 

include 'connection.php';

$id = $_GET['id'];
$id = intval($id);

$stmt = $conn->prepare('SELECT * FROM tecnologias WHERE id=?');
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();

$row = $result->fetch_assoc();

echo '<h2>'. $row['nome'] . '</h2>';

echo '<table>';
echo '<tr>';
echo '<td> Domínio da Tecnologia </td>';
echo '<td>' . $row['dominio'] . '%</td>';
echo '</tr>';
echo '<tr>';
echo '<td> Projetos usando a Tecnologia </td>';
echo '<td>' . $row['projetos'] . '</td>';
echo '</tr>';
echo '</table>';

echo '<h4><a href=models/remove.php?id='. $id . '>Remover Registro</a></h4>';
echo '<h4><a href=editar.php?id='. $id . '>Editar Registro</a></h4>';
echo '<br>';
echo '<h4><a href=index.php>Voltar</a></h4>';

//--Fecha Conexão
$conn->close();

?>