<?php
    session_start();

    if(isset($_SESSION['email']) and $_SESSION['estado'] == 'Autenticado')
    {
    }
    else
    {  
           echo "<script> alert('No tienes permiso para entrar a esta pagina'); </script> <br>"?> <a class='nav-link'
    href='login.php'> inicia Sesion </a> <?php ;
           exit();
    }
    $conexion = mysqli_connect('localhost','root','','mds2');  
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
    <title>Inventario</title>
</head>

<body>
    <div class="body-inv">
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
                            <a class="nav-link" href="contacto.php" style="color: white;">Reportar problema</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="material.php" style="color: white;">Solicitar material</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php" style="color: white;">Iniciar sesion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="perfil.php" style="color: white;">Mi perfil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <div class="invent-box">
        <div class="table">
            <caption><b>Material disponible en almacen</b></caption>
            <table  cellpading = "5"  border = "1">
                <tr>
                    <th>
                        Nombre
                    </th>
                    <th>
                        Cantidad
                    </th>
                    <th>
                        Disponibilidad
                    </th>
                </tr>

                <tr>
                    <?php
                        $sql = "select * from components";
                        $result = mysqli_query($conexion,$sql);

                        while($mostrar = mysqli_fetch_array($result)){
                            ?>
                    <td><?php echo $mostrar['Name']?></td>
                    <td><?php echo $mostrar['Amount']?></td>
                    <td><?php echo $mostrar['IsAvailable']?></td>

                </tr>
                    <?php
                        }
                    ?>
            </table>

        </div>

    </div>
        
    </div>
</body>

</html>