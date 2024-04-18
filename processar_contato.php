<?php
// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Configurar o destinatário do e-mail
    $to = "exemplo@email.com";

    // Construir o cabeçalho do e-mail
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

    // Construir o corpo do e-mail
    $body = "Nome: $name <br>";
    $body .= "E-mail: $email <br>";
    $body .= "Assunto: $subject <br>";
    $body .= "Mensagem: $message <br>";

    // Enviar o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "O e-mail foi enviado com sucesso.";
    } else {
        echo "Houve um erro ao enviar o e-mail.";
    }
}
?>
