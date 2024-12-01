<?php
// Incluir o arquivo de conexão com o banco de dados
include('conexao.php'); // Verifique se o caminho está correto

// Carregar o autoload do Composer para o PHPMailer
require 'vendor/autoload.php';

// Usar as classes do PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Criar instância do PHPMailer
$mail = new PHPMailer(true);

try {
    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; 
    $mail->SMTPAuth   = true;
    $mail->Username   = 'seuemail@gmail.com'; 
    $mail->Password   = 'suasenha'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Destinatários
    $mail->setFrom($email, $name);
    $mail->addAddress('3dgamerzone0@gmail.com', 'João Vítor');

    // Conteúdo do e-mail
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = nl2br($message);
    $mail->AltBody = $message;

    // Enviar o e-mail
    $mail->send();
    echo 'E-mail enviado com sucesso!';

    // (Opcional) Salvar no banco de dados
    if ($conn) {
        $stmt = $conn->prepare("INSERT INTO contact_form_submissions (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $subject, $message);

        if ($stmt->execute()) {
            echo "Mensagem salva no banco de dados.";
        } else {
            echo "Erro ao salvar no banco de dados: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Erro de conexão com o banco de dados.";
    }

} catch (Exception $e) {
    echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
}
?>
