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
      $sql_delete = "delete from despesas where id=$id";
      $result_delete = $conexao->query($sql_delete);
      }
    }
}
header('Location: despesas.php');
?>