<!-- index.php -->
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilos.css">
 </head>
 <body>
    <body>
        <div class="container">
            <h2>Login</h2>

            <form action="processa_login.php" method="post">
            <input type="text" name="usuario" placeholder="Nome de usuário">
            <input type="password" name="senha" placeholder="Senha">
            <button type="submit">Entrar</button>
            </form>
            <p>Não tem conta? <a href="cadastro.php">Cadastre-se</a></p>
        </div>
</body>

    <script>
    const formLogin = document.querySelector('form');

    formLogin.addEventListener('submit', function(event) {
        const usuario = formLogin.usuario.value.trim();
        const senha = formLogin.senha.value.trim();

        if (usuario.length === 0) {
        alert('Por favor, preencha o nome de usuário.');
        event.preventDefault();
        return;
        }

        if (senha.length === 0) {
        alert('Por favor, preencha a senha.');
        event.preventDefault();
        return;
        }
    });
    </script>
 </body>
 </html>
