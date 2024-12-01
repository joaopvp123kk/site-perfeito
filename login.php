<?php 
session_start();
include 'conexao.php'; // Conexão com o banco de dados

$message = ''; // Variável para mensagens de erro ou sucesso

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username_or_email = mysqli_real_escape_string($conexao, trim($_POST['nome'])); // Obtém e sanitiza o nome ou email
    $password = trim($_POST['senha']); // Obtém a senha informada no formulário

    if (!empty($username_or_email) && !empty($password)) {
        // Busca o usuário pelo username ou email
        $query = "SELECT * FROM usuarios WHERE username = '$username_or_email' OR email = '$username_or_email'";
        $result = mysqli_query($conexao, $query);

        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);

            // Verifica a senha usando password_verify
            if (password_verify($password, $user['password'])) {
                // Cria as sessões para o usuário logado
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $user['username'];

                // Redireciona para a página protegida
                header('Location: index-2.php');
                exit;
            } else {
                $message = "Senha incorreta.";
            }
        } else {
            $message = "Usuário ou e-mail não encontrado.";
        }
    } else {
        $message = "Preencha todos os campos.";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>3D Gamer Zone - Um espaço dedicado ao público gamer de jogos 3D</title>
	<meta charset="UTF-8">
	<meta name="description" content="Registra aí">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/logo1.ico" rel="shortcut icon"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="registro.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('img/slider-bg-1.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            color: #fff;
        }

        .form-container {
            background: rgba(0, 0, 0, 0.7); /* Fundo semitransparente */
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            margin: 100px auto;
            text-align: center;
        }

        .form-container h1 {
            margin-bottom: 20px;
        }

        .form-container input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }

        .form-container button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #0066cc;
            color: #fff;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #004d99;
        }

        .form-container a {
            color: #66ccff;
            text-decoration: none;
        }

        .form-container a:hover {
            text-decoration: underline;
        }

        .message {
            background-color: #ffcccc;
            color: #990000;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Login</h1>

        <!-- Exibição de mensagem de erro ou sucesso -->
        <?php if ($message): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>

        <form action="" method="POST">
            <input type="text" name="nome" placeholder="Usuário" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
        <p>Não tem uma conta? <a href="registro.php">Registre-se</a></p>
        <p>Entrar na página inicial <a href="index.html">sem cadastro</a></p>
    </div>
</body>
</html>
