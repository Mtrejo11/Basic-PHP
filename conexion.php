<?php

function conectar(){

    $user ="root";
    $pass="";
    $server="localhost";
    $db = "testDatabase";

    $con = mysql_connect($server,$user,$pass) or die ("Erro al conectar a BD".mysql_error());

    mysql_select_db($db,$con);

    return $con;

}

?>
