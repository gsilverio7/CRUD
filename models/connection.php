<?php 

//--Estabelecendo conexão com banco de dados
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'gsscrud';
$conn = new mysqli($server, $user, $pass, $db);

//--Verifica e mostra erros de conexão
//if($conn->connect_errno) {
//    die('Falhou em conectar: (' . $conn->connect_errno . ')' . $conn->connect_error);
//}

//--Checa Conexão
//echo $conn->host_info . '<br>';


//--Criar tabela
$sql = 'CREATE TABLE IF NOT EXISTS tecnologias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    dominio INT NOT NULL,
    projetos VARCHAR(255) NOT NULL
)';
$conn->query($sql);

?>