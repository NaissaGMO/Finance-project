<?php
    include_once('config.php');
    session_start();

    if ((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];
    $sql_id = mysqli_query($conexao, "select id from usuarios where email = '$email' and senha = '$senha'");
    $fk = mysqli_fetch_assoc($sql_id);

    $consulta = mysqli_query($conexao, "select id,tipo,valor,data_rec 
    from receitas where id_usuario = '{$fk['id']}'");
    
?>

<!DOCTYPE html>
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-COMPATIBLE" content = "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href= "css/style.css">
    <title>Lista de receita</title>
</head>
    <body>
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="receitas.php">Receitas | Ganhos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="despesas.php">Despesas | Gastos</a>
            </li>
            <li class="d-flex">
          <a href="exit.php" class="btn btn-outline-info">Sair</a>
         </li>
          </ul>
        </div>
        <div class="card-body">
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">Tipo</th>
                <th scope="col">Valor</th>
                <th scope="col">Data de recebimento</th>
                <th scope="col">#</th>
              </tr>
            </thead>
            <tbody>
            <?php
        while($user_data = mysqli_fetch_assoc($consulta))
        {
            echo "<tr>";
            echo "<td>".$user_data['tipo']."</td>";
            echo "<td>".$user_data['valor']."</td>";
            echo "<td>".$user_data['data_rec']."</td>";
            echo  "<td>
                <a class='btn btn-outline-dark' href='edit_receita.php?id=$user_data[id]' title='Editar'>
                &#128393; </a> 
                <a class='btn btn-outline-danger' href='delete-rec.php?id=$user_data[id]' title='Excluir'>&#128465; </a>
                </td>";
            echo  "</tr>" ;
        }
    ?>
            </tbody>
          </table>
          <a href="form_receita.php">Adicionar receita</a>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>