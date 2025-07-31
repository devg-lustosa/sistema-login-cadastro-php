<!-- cadastro.php -->
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Cadastro</title>
 </head>
 <body>
    <div class="container">
        <h2>Cadastro</h2>
            <form action="processa_cadastro.php" method="post">
            <input type="text" name="usuario" placeholder="Nome de usuário">
            <input type="password" name="senha" placeholder="Senha">
            <button type="submit">Cadastrar</button>
            </form>
        <p>Já tem uma conta? <a href="index.php">Faça login</a></p>
  </div>
 </body>

    <script>
    const form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
        const usuario = form.usuario.value.trim();
        const senha = form.senha.value.trim();

        if (usuario.length < 3) {
        alert('O nome de usuário deve ter pelo menos 3 caracteres.');
        event.preventDefault(); // Impede o envio do formulário
        return;
        }

        if (senha.length < 6) {
        alert('A senha deve ter pelo menos 6 caracteres.');
        event.preventDefault();
        return;
        }
    });
    </script>

 </html>

 