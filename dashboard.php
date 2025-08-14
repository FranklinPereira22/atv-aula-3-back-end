<?php
// credenciais válidas teste
$valid_user = 'admin';
$valid_pass = '123456';

// verifica se o form foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // pega os dados do form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // verifica as credenciais
    if ($username === $valid_user && $password === $valid_pass) {
        header("Location: dashboard.php");
        exit();
    } else {
        // credenciais incorretas
        echo "<h2>Login falhou</h2>";
        echo "<p>Nome de usuário ou senha incorretos. Por favor tente novamente!</p>";
        echo "<a href='index.html'>voltar</a>";
    }
}
?>