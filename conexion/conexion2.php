<?php

function modificar(){
    if (mysqli_connect_errno($Email)) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    $query = "SELECT IdUser from users where Email = '$Email'";
    $result = mysqli_query($conn, $query);

    /* numeric array */
    $row = mysqli_fetch_array($result, MYSQLI_NUM);

    $id = intval($row);

    return $id;
}
?>