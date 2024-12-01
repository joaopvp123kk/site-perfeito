<?php
session_start();
include 'conexao.php'; // Inclua aqui a conexão com o banco de dados

// Inicializa a variável de mensagem
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Filtra e valida os dados enviados
    $username = mysqli_real_escape_string($conexao, trim($_POST['username']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $password = trim($_POST['password']);
    $dob = mysqli_real_escape_string($conexao, trim($_POST['dob'])); // Data de nascimento

    // Validações adicionais
    if (!preg_match('/^[a-zA-Z0-9_]{3,20}$/', $username)) {
        $message = "O nome de usuário deve conter apenas letras, números e sublinhados, entre 3 e 20 caracteres.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "E-mail inválido.";
    } elseif (strlen($password) < 6) {
        $message = "A senha deve ter pelo menos 6 caracteres.";
    } else {
        // Verifica a idade
        $currentDate = new DateTime();
        $dobDate = new DateTime($dob);
        $age = $currentDate->diff($dobDate)->y; // Calcula a idade em anos

        if ($age < 16) {
            $message = "Você precisa ter pelo menos 16 anos para se registrar.";
        } else {
            // Criptografa a senha
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Verifica se o usuário ou email já existe
            $query = "SELECT * FROM usuarios WHERE username = '$username' OR email = '$email'";
            $result = mysqli_query($conexao, $query);

            if (mysqli_num_rows($result) > 0) {
                $message = "Usuário ou e-mail já cadastrado.";
            } else {
                // Insere o novo usuário no banco de dados, incluindo a data de nascimento
                $insert = "INSERT INTO usuarios (username, password, email, dob) VALUES ('$username', '$hashedPassword', '$email', '$dob')";
                if (mysqli_query($conexao, $insert)) {
                    header('Location: login.php'); // Redireciona para a página de login
                    exit;
                } else {
                    $message = "Erro ao registrar usuário. Tente novamente.";
                }
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>3D Gamer Zone - Um espaço dedicado ao público gamer de jogos 3D</title>
	<meta charset="UTF-8">
	<meta name="description" content="Um espaço dedicado ao público gamer de jogos 3D">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/logo1.ico" rel="shortcut icon"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="registro.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('login/slider-bg-2.jpg') no-repeat center center fixed;
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
        <h1>Registrar</h1>
        
        <!-- Exibe mensagens de erro ou sucesso -->
        <?php if ($message): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
        
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Usuário" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="password" placeholder="Senha" required>
            <!-- Campo de Data de Nascimento -->
            <input type="date" name="dob" required>
            <button type="submit">Cadastrar</button>
        </form>
        <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
    </div>
</body>
</html>
