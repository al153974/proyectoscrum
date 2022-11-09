<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""> 
    <meta name="generator" content="Hugo 0.72.0">
    <link rel="stylesheet" type="text/css" href="styles.css">

  </head>
  <body class="text-center bg-login login">
    
    <form class="form-signin form-login" method="post" novalidate>

        <h1 class="h3 mb-3 font-weight-normal text-login">Iniciar Sesión</h1>

        <div>
            <label for="email"  class="sr-only label">E-mail</label>
            <input type="text"  id="email" name="email" class="form-control mb-2" placeholder="Email" id="email">
        </div>

        <div>
            <label for="password" class="sr-only label">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" id="password" required>
        </div>

        <button class="btn btn-lg btn-success btn-block" name="submit" type="submit">Sign in</button>
      
    </form>

    <?php 

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $email = $_POST['email'];
            $password = $_POST['password'];
        
            if($email == "admin@admin.com" && $password == "123456"){
                // el usuario esta autenticado
                session_start();

                // LLenar el arreglo de la sesión
                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;
                
                header("Location: /");

            }else{
            
            ?>

            <div class="error">
                <?php
                    echo "Los datos son incorrectos";
                ?>
            </div>
            
            <?php
                }
                }
            ?>
        
    


    
  </body>
</html>
