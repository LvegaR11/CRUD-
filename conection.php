<?php   

function conection(){
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $bd = "bd_luis_vega_10_red_social";

    //CREAMOS LA CONEXION 
    $connect = mysqli_connect($host, $user, $pass);
    mysqli_select_db( $connect, $bd);
    return $connect;
};

?>