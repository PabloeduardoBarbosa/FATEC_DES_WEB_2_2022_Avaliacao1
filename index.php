<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        session_start();
        if ($_POST['username']=='fatec' and $_POST['password']=='araras'){
            $_SESSION['loggedin']=TRUE;

            $_SESSION['username']='Pablo';
            header("location: start.php");
        } else {
            $_SESSION['loggedin']=FALSE;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
    <title>Livraria</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-sm-3">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Digite o nome de Usuario: </label><br>
        <input type="text" id="username" name="username"></input><br>
        <label for="password" >Digite sua senha: </label><br>
        <input type="password" id="password" name="password"></input><br><br>
        <hr class="">
        <input class="btn btn-primary" type="submit" name="Enviar"></input>
        </form>
        </div>
        </div>
    </div>
</body>
</html>