<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/index-styles.css?v=<?php echo(rand()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <title>Inicio de sesion</title>
</head>

<body>
    <div class="body-reg">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php" style="color: white;">MDS</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-
                    target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-
                    label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="material.php" style="color: white;">Solicitar material</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inventario.php" style="color: white;">Inventario</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php" style="color: white;">Reportar un Problema</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: white;">Mi perfil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="login">
            <div class="login-box">
                <img src="img/mds-logo.png" alt="mds-logo">
                <h4>Login</h4>

                <form action="controlador/login.php" method="POST">
                    <label for="username">Usuario</label>
                    <input type="email" name="user" placeholder="Ingresa tu correo" autofocus>

                    <label for="contraseña">Contraseña</label>
                    <input type="password" name="pass" placeholder="Ingresa tu contraseña">

                    <input type="submit" value="Ingresar">

                    <a href="registro.php">¿No tienes cuenta?, Registrate</a>

                </form>
            </div>
        </div>
    </div>
</body>