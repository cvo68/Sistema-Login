<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sistema de Login</title>
</head>
<body>
    <form class="form" action="logar.php" method="post">
        <div class="card">
            <div class="tit">
                <h1>Painel de Controle</h1>
                <h3>Acesso</h3>
            </div>
            <div class="dados">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" placeholder="email" required>
                <br>
                <label for="senha">Senha: </label>
                <input type="password" name="senha" id="senha" placeholder="senha" required>
                <br>
                <label for="lembrar"> <input type="checkbox" name="lembrar" id="lembrar"> Lembrar-me</label>
                <br>
                <button type="submit">Acessar</button>
            </div>

        </div>
    </form>
    
</body>
</html>