<?php

    include("../conexion/conexion.php");

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $mds = new conexion;

    $mds->login($user,$pass);
    $mds->cerrar();

?>