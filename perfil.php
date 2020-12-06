<?php
    session_start();
    $comodin = $_SESSION['email'];
    if(isset($_SESSION['email']) and $_SESSION['estado'] == 'Autenticado')
    {
    }
    else
    {  
           echo "<script> alert('No tienes permiso para entrar a esta pagina'); </script> <br>"?> <a class='nav-link'
    href='login.php'> inicia Sesion </a> <?php ;
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
            <h2>
                <b> Datos Registrados. </b>
            </h2>
            <?php
            $conexion=mysqli_connect('localhost','root','','mds2');
            $consulta="SELECT IdUser from users where Email = '$comodin'";
            $resultado=mysqli_query($conexion,$consulta);


            while($mostrar=mysqli_fetch_array($resultado))

            $ID = $mostrar['IdUser'];

<<<<<<< HEAD
            $CTec="SELECT * from technician where FkUser = '$ID'";
            $CStorer="SELECT * from storer where Fkuser = '$ID'";

        if($_SESSION['UserType'] == "Admin")
            {
               $resTec=mysqli_query($conexion,$CTec);
               while($mostrar1=mysqli_fetch_array($resTec)){

                   echo "<h3> Nombre del empleado:  </h3>";
                   echo "<h4>".$mostrar1['Name']." ".$mostrar1['LastName']." ".$mostrar1['MLastName']."</h4> <br>";
                   echo "<h3>Email:  </h3>";
                   echo "<h4>".$comodin."</h4> <br>";
                   echo "<h3>Area: </h3>";
                   echo  "<h4>".$_SESSION['UserType']."</h4><br>";
                   echo "<h3>Matricula</h3>";
                   echo "<h4>".$mostrar1['TechnicianNo'],"</h4>";
               }

            } 
            if($_SESSION['UserType'] == "User") 
            {

                $resStorer=mysqli_query($conexion,$CStorer);
                while($mostrar2=mysqli_fetch_array($resStorer)){

                    echo "<h3> Nombre del empleado:  </h3>";
                    echo "<h4>".$mostrar1['Name']." ".$mostrar1['LastName']." ".$mostrar1['MLastName']."</h4> <br>";
                    echo "<h3> Apellido Materno:  </h3>";
                    echo "<h4>".$mostrar1['MLastName']."</h4><br>";
                    echo "<h3>Email:  </h3>";
                    echo "<h4>".$comodin."</h4><br>";
                    echo "<h3>Area: </h3>";
                    echo  "<h4>".$_SESSION['UserType']."</h4><br>";
                    echo "<h3>Matricula: </h3>";
                    echo "<h4>".$mostrar1['TechnicianNo'],"</h4>";
                }
            }
            ?>
        </div>
        <div class="order-box">
            <h4> Ordenes pendientes </h4>
            <?php
                $consulta2 = "select * from reports where FkTechnician = '$ID'";
                $resultado2 = mysqli_query($conexion,$consulta2);

                while($row = mysqli_fetch_array($resultado2)){
                    
                    if($row['Solved'] == 0){
                        $estatus = "pendiente";
                    }
                    else{
                        $estatus = "resuelto";
                    }

                    echo "Numero de reporte: ". $row['IdReport']."<br>";
                    echo "Motivo: ". $row['Reason']."<br>";
                    echo "Estatus: ". $estatus."<br>";
                    echo "---------------------------<br>";
                }
=======
            $CTec="SELECT * from Technician where FkUser = $ID";
            $CStorer="SELECT * from Storer where FkUser = $ID";

        if($_SESSION['UserType'] == "Tecnico")
            {
               $resTec=mysqli_query($conexion,$CTec);
               while($mostrar1=mysqli_fetch_array($resTec)){

                echo "<h3> Nombre del empleado:  </h3>";
                echo $mostrar1['Name'];
                echo "<h3> Apellido Paterno:  </h3>";
                echo $mostrar1['LastName'];
                echo "<h3> Apellido Materno:  </h3>";
                echo $mostrar1['MLastName'];
                echo "<h3>Email:  </h3>";
                echo $comodin;
                echo "<h3>Area: </h3>";
                echo  $_SESSION['UserType'];
                echo "Matricula";
                echo "<h1>".$mostrar1['TechnicianNo'],"</h1>";
               }

            } 
            if($_SESSION['UserType'] == "Almacenista") 
            {

                $resStorer=mysqli_query($conexion,$CStorer);
                while($mostrar2=mysqli_fetch_array($resStorer)){

                    echo "<h3> Nombre del empleado:  </h3>";
                    echo $mostrar2['Name'];
                    echo "<h3> Apellido Paterno:  </h3>";
                    echo $mostrar2['LastName'];
                    echo "<h3> Apellido Materno:  </h3>";
                    echo $mostrar2['MLastName'];
                    echo "<h3>Email:  </h3>";
                    echo $comodin;
                    echo "<h3>Area: </h3>";
                    echo  $_SESSION['UserType'];
                    echo "Matricula";
                    echo "<h1>".$mostrar2['StorerNo'],"</h1>";
                }
            }
>>>>>>> main
            ?>
        </div>
    </div>
</body>

</html>