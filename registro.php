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
    <title>Registro</title>
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
        <div class="register-box">
            <h4>Registro</h4>
            <form action="registro.php" method="POST">
                <label for="Nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Ingresa tu nombre" autofocus>

                <label for="apellido">Apellidos</label>
                <input type="text" name="apellidoP" placeholder="apellido paterno">
                <input type="text" name="apellidoM" placeholder="apellido materno">

                <label for="Correo">Email</label>
                <input type="email" name="email" placeholder="Ingresa tu correo">

                <label for="contraseña">Contraseña</label>
                <input type="password" name="pass" id="" placeholder="ingresa tu contraseña">
                <label for="contraseña">Confirmar Contraseña</label>
                <input type="password" name="confirm_password" id="" placeholder="confirma tu contraseña">

                <label for="UserType">Rol</label>
                <select name="Type" id="">
                    <option value="1" selected>Tecnico</option>
                    <option value="2">Almacenista</option>
                </select>
                <input type="submit" value="Registrar">

                <a href="login.php">¿ya tienes una cuenta? Inicia Sesion</a>
            </form>
            <script>
            <?php
                include ("conexion/conexion2.php");
                session_start();
                session_destroy();
                error_reporting(0);

                $conn = mysqli_connect('localhost','root','','mds2');
                if(isset($_POST['email'])){
                    $email = $_POST['email'];
                }
                if(isset($_POST['pass'])){
                    $pass = $_POST['pass'];
                }
                if(isset($_POST['Type'])){
                    $UserType = $_POST['Type'];
                }
                if(isset($_POST['nombre'])){
                    $nombre = $_POST['nombre'];
                }
                if(isset($_POST['apellidoP'])){
                    $apellidop = $_POST['apellidoP'];
                }
                if(isset($_POST['apellidoM'])){
                    $apellidom = $_POST['apellidoM'];
                }
                $sql1 = "insert into users(IdUser, Password,Email, UserType) values('null','$pass','$email',$UserType)";
                $execute = mysqli_query($conn,$sql1);

                if($UserType == 1){
                    $TechNo = rand(2000,2999);
                    $sql2 = "insert into technician (IdTechnician, Name, LastName, MLastName,TechnicianNo,email) values('null', '$nombre','$apellidop','$apellidom','$TechNo','$email')";
                    $execute2 = mysqli_query($conn,$sql2);
                }
                elseif($UserType == 2){
                    $StorerNo = rand(6000,6999);
                    $sql2 = "insert into storer (IdStorer, Name, LastName, MLastName,StorerNo, email) values('null','$apellidop','$apellidom','$StorerNo','$email')";
                    $execute2 = mysqli_query($conn,$sql2);
                }

            ?>
            </script>
        </div>
    </div>
</body>

</html>