<?php
    if(isset($_POST['submit']))
    {
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao,"INSERT INTO usuarios(nome,email,senha) 
    VALUES ('$nome','$email','$senha')" );
    
    header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/formulario.css" rel="stylesheet">
    <title>Formulario</title>
</head>
<body>
  <div class="content">
  <div class="box">
    <form action="form_cadastro.php" method="POST">
      <header>Formulário</header>
        <label class="label" for="email">Email</label>
        <br>
        <input class= "input" type="text" name="email" placeholder="Digite seu email">
        <br>
        <label class="label" for="text">Nome</label>
        <br>
        <input class= "input" type="text" name="nome" placeholder="Digite o seu nome">
        <br>
        <label class="label" for="password">Senha</label>
        <br>
        <input class= "input" type="password" name="senha" placeholder="Digite sua nova senha">
        <br>
        <input type="submit" name="submit" id="submit">
        <p>Já tem uma conta cadastrada? </p>
        <a href="login.php"> Faça login.</a>
    </form>
  </div>
  </div>
</body>
</html>