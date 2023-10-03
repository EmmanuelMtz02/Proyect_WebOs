<?php
    //conexion de base de datos con php
    //variables para la conexion
        $host = "localhost";
        $contraseña = "";
        $usuario = "root";
        $bd = "registro";

    //Codigo a la conexion
    try{
        // intentar la conexion a la base de datos registro
        $base_de_datos = new PDO('mysql:host=localhost;dbname=registro', "root", "");
    }catch(PDOException $e){
        echo "Ocurrio un error inesperado en la conexion a la base de datos, llama a los de soporte" . $e->getMessage();
    }
 ?>