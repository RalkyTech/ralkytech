<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $celular = htmlspecialchars($_POST['celular']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Simula o envio (apenas exibe os dados)
    echo "<h1>Dados do Formulário (Teste Local)</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Celular:</strong> $celular</p>";
    echo "<p><strong>Mensagem:</strong> $mensagem</p>";
    echo "<p>⚠️ <em>Em um servidor real, isso seria enviado para ralkytech@gmail.com</em></p>";
    exit();
}
?>