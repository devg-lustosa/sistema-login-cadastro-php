<?php
session_start(); // Inicia a sessão para controlar o login

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Lê todas as linhas do arquivo de usuários
$usuarios = file('usuarios.txt', FILE_IGNORE_NEW_LINES);

$usuarios_valido = false;

foreach ($usuarios as $linha) {
    list($user, $senha_hash) = explode('|', $linha);

    if ($usuario === $user && password_verify($senha, $senha_hash)) {
        $usuarios_valido = true;
        break;
    }
}

if ($usuarios_valido) {
    $_SESSION['usuario'] = $usuario; // Salva o usuário na sessão
    header('Location: area_restrita.php'); // Redireciona para a área restrita
    exit;
} else {
    echo "Usuário ou senha inválidos. <a href='index.php'>Tente novamente</a>";
}