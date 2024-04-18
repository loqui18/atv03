<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verificar as credenciais (substitua com sua lógica de autenticação)
    if ($username === "usuario" && $password === "senha") {
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;
        header("Location: boas-vindas.php");
        exit;
    } else {
        echo "Nome de usuário ou senha incorretos.";
    }
}
?>

