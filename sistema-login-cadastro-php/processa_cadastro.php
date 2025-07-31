<?php
// Pega os dados do formulário
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Gera um hash seguro da senha (boa prática!)
$senhaHash = password_hash($senha,  PASSWORD_DEFAULT);

// Monta a linha que será salva no arquivo
$linha = $usuario . '|' . $senhaHash . PHP_EOL;

// Salva no arquivo (adiciona ao final)
file_put_contents('usuarios.txt', $linha, FILE_APPEND);

// Redireciona para a tela de login
header('Location: index.php');
exit;
?>