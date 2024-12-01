
<?php
$servidor = "localhost"; // Endereço do servidor
$usuario = "root";       // Usuário do banco (padrão do XAMPP é "root")
$senha = "";             // Senha do banco (padrão no XAMPP é vazio)
$banco = "login_system";    // Substitua por nome do seu banco

// Criação da conexão
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Verifica se houve erro na conexão
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>


<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "cadastro_login";

//$conexao = mysqli_connect($servername, $username, $password, $dbname);

//if (!$conexao) {
  //  die("Conexão falhou: " . mysqli_connect_error());
//}
?>