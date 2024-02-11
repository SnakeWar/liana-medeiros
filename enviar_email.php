<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletando dados do formulário
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Configurações para o e-mail
    $destinatario = "seu_email@dominio.com"; // Substitua pelo seu endereço de e-mail
    $assunto = "Formulário de Contato";
    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "Telefone: $telefone\n";
    $corpo_email .= "Email: $email\n";
    $corpo_email .= "Mensagem:\n$mensagem";

    // Enviando o e-mail
    if (mail($destinatario, $assunto, $corpo_email)) {
        echo "O e-mail foi enviado com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar o e-mail.";
    }
} else {
    echo "Acesso inválido!";
}
?>
