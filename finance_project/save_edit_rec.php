<?php
   include_once('config.php');
   
   if(isset($_POST['update']))
   {
    $id = $_POST['id'];
    $Tipo = $_POST['tipo'];
    $Valor = $_POST['valor'];
    $Data_rec = $_POST['data_rec'];
    $sql_update = "update receitas set tipo='$Tipo',valor='$Valor',data_rec='$Data_rec'
    where id='$id'";

    $result = $conexao->query($sql_update);
   }

   header('Location: receitas.php');
   ?>