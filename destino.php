<?php
$method = $_SERVER['REQUEST_METHOD'];

$nome = $_REQUEST['nome'] ?? '';
$telefone = $_REQUEST['telefone'] ?? '';
$email = $_REQUEST['email'] ?? '';
$mensagem = $_REQUEST['mensagem'] ?? '';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dados</title>
</head>
<body>
    <h1>Dados</h1>
    <div class="data">
        <p><strong>Name:</strong> <?php echo htmlspecialchars($nome); ?></p>
        <p><strong>Fone:</strong> <?php echo htmlspecialchars($telefone); ?></p>
        <p><strong>Mail:</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>Message:</strong> <?php echo nl2br(htmlspecialchars($mensagem)); ?></p>
    </div>

    <div class="headers">
        <h2>HTTP</h2>
        <pre><?php echo var_export(apache_request_headers()); ?></pre>
    </div>

    <div class="method">
        <h2>Método</h2>
        <p><?php echo htmlspecialchars($method); ?></p>
    </div>
</body>
</html>
