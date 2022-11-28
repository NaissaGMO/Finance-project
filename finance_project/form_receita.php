<?php
   if(isset($_POST['submit']))
   {
   include_once('config.php');
    require 'receitas.php';
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];
    $sql_id = mysqli_query($conexao, "select id from usuarios where email = '$email' and senha = '$senha'");
    $Tipo = $_POST['tipo'];
    $Valor = $_POST['valor'];
    $Data_rec = $_POST['data_rec'];
    $fk = mysqli_fetch_assoc($sql_id);
    
    $result = mysqli_query($conexao,"INSERT INTO receitas(tipo,valor,data_rec,id_usuario)
    VALUES ('$Tipo','$Valor','$Data_rec','{$fk['id']}')");
    
    header('Location: receitas.php');
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-COMPATIBLE" content = "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/formulario.css" rel="stylesheet">
    <title>cadastro de receitas</title>
  </head>
  <body>
<div class="content">
<div class="box">
<form action="form_receita.php" method="POST">
  <header> 
  <a class= "voltar" href="receitas.php"> ⇦ </a>
    Formulário </header>
  <br>
    <label class= "label" for="tipo-rec">Tipo de receita</label>
    <br>
    <input class= "input" type="text" name="tipo" placeholder="Tipo de receita">
    <br> 
    <label class="label" for="valor">Valor</label>
    <br>
    <input class= "input" type="text" name="valor" placeholder="Digite o valor">
    <br>
    <label class="label" for="data_rec">Data de recebimento:</label>
    <br> 
    <input class="input" type="date" name="data_rec">
    <br> </br>
    <input type="submit" name="submit" id="submit">
</form>
</div>
</div>
  </body>
</html>