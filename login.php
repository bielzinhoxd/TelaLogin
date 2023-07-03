<?php
// Configuração do banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se houve algum erro na conexão 
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Obtenção dos dados do formulário
$username = $_POST['username']:
$password = $_POST['password']:

// Consultar SQL para veriicar as credenciais
$sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if(result->num_rows >0) {
    // Login Sucedido
    echo "success";
} else {
    // Login Falhou
    echo "failure"
}

$conn->close();

?>