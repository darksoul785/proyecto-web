<?php
    session_start();
    $comodin = $_SESSION['email'];
    if(isset($_SESSION['email']) and $_SESSION['estado'] == 'Autenticado')
    {
    }
    else
    {  
           echo "<script> alert('No tienes permiso para entrar a esta pagina'); </script> <br>"?> <a class='nav-link' href='login.php'> inicia Sesion </a> <?php ;
           exit();
    }  
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
    <title>Mi perfil</title>
</head>

<body>
    <div class="body-profile">
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
                    </ul>
                </div>
            </div>
        </nav>
        <div class="profile-box">
            <h4> Hola <?php echo $_SESSION['email']; ?> </h4>
            <p>
               <b> Datos Registrados. </b>
            </p>
            <?php
            $conexion=mysqli_connect('localhost','root','','mds');
            $consulta="SELECT IdUser from users where Email = '$comodin'";
            $resultado=mysqli_query($conexion,$consulta);


            echo $resultado;
            echo "<p> Nombre del empleado:  <br>";
            echo "<br>Email: <br>";
            echo $_SESSION['email'];
            echo "<br>Area: <br>";
            echo $_SESSION['UserType'];

            if($_SESSION['UserType'] == "Tecnico")
            {
                echo "Consulta SQL a la tabla Technician";
            } else {
                echo "Consulta SQL a la tabla storer";
            }

            ?>
        </div>
    </div>
</body>

</html>