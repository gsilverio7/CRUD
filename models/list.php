<?php 

include 'connection.php';

//--Seleciona todos os dados da tebela
$result = $conn->query('SELECT * FROM tecnologias');

//-Verifica se há dados na tabela
$i = 0;
while($tec = $result->fetch_assoc()) {
    $i++;
}

//--Exibe Mensagem dizendo que não há registros caso tabela esteja vazia
if ( $i === 0 ) echo '<p style=text-align:center;>Não há registros na tabela!</p>';

//--Lista os dados caso tabela não esteja vazia
if ( $i > 0 ) {
    $result = $conn->query('SELECT * FROM tecnologias');
    echo '<table>';
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['nome'] . '</td>';
        echo '<td>' . $row['dominio'] . '%</td>';
        echo '<td> <a href=mostrar.php?id=' . $row['id'] . '>Mais Detalhes</a></td>';
        echo '</tr>';
    }
    echo '</table>';
}
//--Fecha Conexão
$conn->close();
?>