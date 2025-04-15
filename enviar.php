<?php
// Configurações de segurança
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validação dos dados
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

    // Verificação dos campos obrigatórios
    if (empty($nome) || empty($email) || empty($mensagem)) {
        header('Location: index.php?status=erro&msg=Por+favor,+preencha+todos+os+campos+obrigatórios');
        exit;
    }

    // Validação do e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: index.php?status=erro&msg=Por+favor,+insira+um+e-mail+válido');
        exit;
    }

    // Configuração do e-mail
    $para = "ralkytech@gmail.com";
    $assunto = "Novo contato do site: " . $nome;
    
    // Construção do corpo do e-mail
    $corpo = "Você recebeu uma nova mensagem do site Ralky Tech:\n\n";
    $corpo .= "Nome: " . $nome . "\n";
    $corpo .= "E-mail: " . $email . "\n";
    $corpo .= "Celular: " . $celular . "\n\n";
    $corpo .= "Mensagem:\n" . $mensagem . "\n";
    
    // Cabeçalhos do e-mail
    $cabecalhos = "From: " . $email . "\r\n" .
                 "Reply-To: " . $email . "\r\n" .
                 "X-Mailer: PHP/" . phpversion() . "\r\n" .
                 "Content-Type: text/plain; charset=UTF-8";

    // Tentativa de envio
    try {
        $enviado = mail($para, $assunto, $corpo, $cabecalhos);
        
        if ($enviado) {
            header('Location: index.php?status=sucesso');
            exit;
        } else {
            error_log("Falha no envio do e-mail para: " . $para);
            header('Location: index.php?status=erro&msg=Não+foi+possível+enviar+a+mensagem.+Tente+novamente+mais+tarde.');
            exit;
        }
    } catch (Exception $e) {
        error_log("Erro no envio de e-mail: " . $e->getMessage());
        header('Location: index.php?status=erro&msg=Ocorreu+um+erro+inesperado.+Por+favor,+tente+novamente.');
        exit;
    }
} else {
    // Redirecionamento se acessado diretamente
    header('Location: index.php');
    exit;
}
?>