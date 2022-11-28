<?php
   include_once('config.php');
   
   if(isset($_POST['update']))
   {
    $id = $_POST['id'];
    $Tipo = $_POST['tipo'];
    $Valor = $_POST['valor'];
    $Data_venc = $_POST['data_venc'];
    $sql_update = "update despesas set tipo='$Tipo',valor='$Valor',data_venc='$Data_venc'
    where id='$id'";

    $result = $conexao->query($sql_update);
   }

   header('Location: despesas.php');
   ?>