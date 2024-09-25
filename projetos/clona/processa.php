<?php
// Verifica se o método de solicitação é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $cartao = $_POST['cartao'];
    $validade = $_POST['validade'];
    $cvv = $_POST['cvv'];

    // Validação simples dos dados (pode ser expandida conforme necessário)
    $nome = htmlspecialchars($nome);
    $cpf = htmlspecialchars($cpf);
    $cartao = htmlspecialchars($cartao);
    $validade = htmlspecialchars($validade);
    $cvv = htmlspecialchars($cvv);

    // Exibe os dados recebidos
    echo "<h1>Dados Recebidos:</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>CPF:</strong> $cpf</p>";
    echo "<p><strong>Número do Cartão:</strong> $cartao</p>";
    echo "<p><strong>Data de Validade:</strong> $validade</p>";
    echo "<p><strong>CVV:</strong> $cvv</p>";
} else {
    echo "<p>Formulário não enviado corretamente.</p>";
}
?>
