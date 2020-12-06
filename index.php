<?php
    session_start();

    if(isset($_SESSION['email']) and $_SESSION['estado'] == 'Autenticado')
    {
    }
    else
    {  
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
    <title>MDS</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php" style="color: white;">MDS</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data- target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria- label="Toggle navigation">

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
                        <a class="nav-link" href="inventario.php" style="color: white;">Inventario</a>
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
    <div id="carouselIndicator" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselIndicator" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicator" data-slide-to="1"></li>
            <li data-target="#carouselIndicator" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">

                <img class="d-block w-100"
                    src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80"
                    alt="First slide">

                <div class="carousel-caption d-none d-md-block">
                    <div class="textBox">
                        <img src="https://images.unsplash.com/photo-1448932223592-d1fc686e76ea?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1949&q=80"
                            width="350" height="400" alt="imagen1">
                        <div class="txt">
                            La disrupción acelerada de los nuevos competidores, las expectativas de los clientes que
                            cambian rápidamente y las innovaciones que cambian el juego que surgen con mayor velocidad:
                            estas demandas impulsan la necesidad de un desarrollo de productos extremadamente ágil y la
                            capacidad de llevar productos innovadores al mercado de la manera más rápida y confiable
                            posible.
                        </div>
                    </div>
                    <h1> Bienvenido <?php echo $_SESSION['UserType']; ?> </h1>
                    <h5>Enfocados en la calidad.</h5>
                    <p>“Comienza haciendo lo que es necesario, después lo que es posible y
                        de repente estarás haciendo lo imposible.”</p>

                </div>
            </div>
            <div class="carousel-item">

                <img class="d-block w-100" src="https://images.unsplash.com/photo-
1510289244640-fbd33875a761?ixlib=rb-
1.2.1&auto=format&fit=crop&w=1351&q=80" alt="Second slide">

                <div class="carousel-caption d-none d-md-block">
                    <div class="textBox">
                        <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                            width="350" height="400" alt="imagen1">
                        <div class="txt">
                            Nuestros servicios de diseño ayudan a los clientes a acelerar el tiempo de comercialización
                            de
                            forma rentable y, al mismo tiempo, minimizan el riesgo. Brindamos servicios de diseño llave
                            en mano y trabajamos con equipos de diseño del cliente para codiseñar productos.
                        </div>
                    </div>
                    <h5>El valor que ofrecemos.</h5>
                    <p>Comercialización más rápida con tecnología avanzada.
                        Servicios de ciclo de vida de productos específicos de la industria.</p>
                </div>
            </div>
            <div class="carousel-item">

                <img class="d-block w-100" src="https://images.unsplash.com/photo-
1515630278258-407f66498911?ixlib=rb-
1.2.1&auto=format&fit=crop&w=1374&q=80" alt="Third slide">

                <div class="carousel-caption d-none d-md-block">
                    <div class="textBox">
                        <img src="https://images.unsplash.com/photo-1522735338363-cc7313be0ae0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2089&q=80"
                            width="350" height="400" alt="imagen1">
                        <div class="txt">
                            Nos comprometemos a proteger el medio ambiente y controlar el uso de recursos en la
                            fabricación y actividades relacionadas. Nuestro sistema de gestión ambiental ayuda a
                            mantener un entorno seguro y saludable para nuestros empleados, al tiempo que garantiza
                            nuestro compromiso con la responsabilidad ambiental.
                        </div>
                    </div>
                    <h5>Hazlo posible, Hazlo mejor.</h5>
                    <p>Nos esforzamos por ser los más
                        Tecnológicamente avanzados y confiables.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>