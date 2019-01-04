<?php

function conectar(){

    $user ="root";
    $pass="";
    $server="localhost";
    $db = "testdatabase";

    $con = mysqli_connect($server,$user,$pass) or die ("Erro al conectar a servidor");

    $dbcon = mysqli_select_db($con,$db) or die("No conecta a la base");

    return $con;

}

?>
