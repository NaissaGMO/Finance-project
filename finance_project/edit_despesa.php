<?php
   if(!empty($_GET['id']))
   {
   include_once('config.php');
    $id = $_GET['id'];
    $sql_select = "select * from despesas where id=$id";
    $result = $conexao->query($sql_select);

    if($result->num_rows > 0)
    {
      while($user_data = mysqli_fetch_assoc($result))
      {
      $Tipo = $user_data['tipo'];
      $Valor = $user_data['valor'];
      $Data_venc = $user_data['data_venc'];
      }
    }
    else 
    {
      header('Location: despesas.php');
    }
    }
    else
    {
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
<form action="save_edit_desp.php" method="POST">
  <header> 
  <a class= "voltar" href="despesas.php"> ⇦ </a>
  Formulário 
  </header>
  <br>
    <label class= "label" for="tipo">Tipo</label>
    <br>
    <input class= "input" type="text" name="tipo" placeholder="Tipo de despesa"
    value="<?php echo $Tipo ?>">
    <br> 
    <label class="label" for="valor">Valor</label>
    <br>
    <input class= "input" type="text" name="valor" placeholder="Digite o valor"
    value="<?php echo $Valor ?>">
    <br>
    <label class="label" for="data_venc">Data de vencimento:</label>
    <br> 
    <input class="input" type="date" name="data_venc" value="<?php echo $Data_venc ?>">
    <br> </br>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="submit" name="update" id="update">
</form>
</div>
</div>
  </body>
</html>