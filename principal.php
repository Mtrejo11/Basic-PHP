<?php

    include("conexion.php");

    $con = conectar();

    echo "Conexion exitosa";

    $query = "SELECT * FROM alumnos";

    $result = mysqli_query($con,$query) or die ("algo ha ido mal");



    echo "<table borde='2'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>NAME</th>";
    echo "</tr>";

    while ($columna = mysqli_fetch_array( $result )){
        echo "<tr>";
        echo "<td>" . $columna['alumno_id'] . "</td><td>" . $columna['alumno_name'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
?>
