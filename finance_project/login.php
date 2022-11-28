<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/formulario.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
  <div class="content">
    <div class="box">
    <form action="log-conexao.php" method="POST">
      <header>Finance Project</header>
        <label for="email">Email</label>
        <input class= "input" type="email" name="email" placeholder="Digite seu email">
        <br>
        <label for="password">Senha</label>
        <input class= "input" type="password" name="senha" placeholder="Digite sua senha">
        <input id="submit" type="submit" name="submit" value="Login">
        <br>
        <a href="#"> Esqueceu sua senha? </a>
        <p>Não possui conta cadastrada? </p>
        <a href="form_cadastro.php"> Cadastre-se.</a>
    </form>
    </div>
    </div>
</body>
</html>