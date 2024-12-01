<?php
  // Substitua pelo seu endereço de e-mail real
  $receiving_email_address = '3dgamerzone0@gmail.com';

  // Incluir o arquivo de conexão com o banco de dados
  include('conexao.php'); // Certifique-se de ter o arquivo `conexao.php`

  // Verificar se o arquivo da biblioteca PHP Email Form existe
  if (file_exists($php_email_form = '../vendor/php-email-form/php-email-form.php')) {
      include($php_email_form);
  } else {
      die('Não foi possível carregar a biblioteca "PHP Email Form"!');
  }

  // Criar instância da classe PHP_Email_Form
  $contact = new PHP_Email_Form;
  $contact->ajax = true;

  // Definir os dados do e-mail
  $contact->to = $receiving_email_address;
  $contact->from_name = "Subscriber";
  $contact->from_email = $_POST['email'];
  $contact->subject = "Notify me request";

  // Adicionar mensagens ao e-mail
  $contact->add_message($_POST['email'], 'Email');

  // Enviar o e-mail
  $email_sent = $contact->send();

  // Se o e-mail foi enviado com sucesso, armazenar no banco de dados
  if ($email_sent) {
      // Preparar a consulta para inserir os dados no banco de dados
      $stmt = $conn->prepare("INSERT INTO contact_form_submissions (name, email, subject, message) VALUES (?, ?, ?, ?)");
      $stmt->bind_param("ssss", $contact->from_name, $_POST['email'], $contact->subject, $_POST['email']); // `message` é o próprio e-mail

      // Executar a consulta
      if ($stmt->execute()) {
          echo "Mensagem enviada com sucesso e armazenada no banco de dados.";
      } else {
          echo "Erro ao armazenar os dados no banco de dados: " . $stmt->error;
      }

      // Fechar a consulta
      $stmt->close();
  } else {
      echo "Erro ao enviar o e-mail.";
  }

  // Fechar a conexão com o banco de dados
  $conn->close();
?>
