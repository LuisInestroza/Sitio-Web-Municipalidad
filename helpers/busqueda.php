<?php
    // Definicion de variables
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "muni2020";

    // Hacer la conexion a la base de datos
    $con = mysqli_connect($host, $user, $password) or die("Error al conectar al servidor");

    // coneccion a la base de datos
    $dbConect = mysqli_select_db($con, $db) or die("Error al conectar a la base de datos");


    $buscar = $_POST['buscar'];
    $queyBusqueda= "SELECT * FROM noticia WHERE  tituloNoticia LIKE '%".$buscar."%' OR descripcionNoticia LIKE '%".$buscar."%'";

    $resultadoBusqueda = mysqli_query($con, $queyBusqueda);
