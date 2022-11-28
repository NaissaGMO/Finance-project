<?php
   if(isset($_POST['submit']))
   {
   include_once('config.php');
    require 'despesas.php';
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];
    $sql_id = mysqli_query($conexao, "select id from usuarios where email = '$email' and senha = '$senha'");
    $Tipo = $_POST['tipo'];
    $Valor = $_POST['valor'];
    $Data_venc = $_POST['data_venc'];
    $fk = mysqli_fetch_assoc($sql_id);
    
    $result = mysqli_query($conexao,"INSERT INTO despesas(tipo,valor,data_venc,id_usuario)
    VALUES ('$Tipo','$Valor','$Data_venc','{$fk['id']}')");
    
    header('Location: despesas.php');
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-COMPATIBLE" content = "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/formulario.css" rel="stylesheet">
    <title>cadastro de despesas</title>
  </head>
<body>
<div class="content">
<div class="box">
<form action="form_despesa.php" method="POST">
  <header> 
  <a class= "voltar" href="despesas.php"> ⇦ </a>  
  Formulário </header>
  <br>
    <label class= "label" for="tipo">Tipo</label>
    <br>
    <input class= "input" type="text" name="tipo" placeholder="Tipo de despesa">
    <br> 
    <label class="label" for="valor">Valor</label>
    <br>
    <input class= "input" type="text" name="valor" placeholder="Digite o valor">
    <br>
    <label class="label" for="data_venc">Data de vencimento:</label>
    <br> 
    <input class="input" type="date" name="data_venc">
    <br> </br>
    <input type="submit" name="submit" id="submit">
</form>
</div>
</div>
  </body>
</html>