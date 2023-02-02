<?php

// localhost se refiere a la computadora donde esta alojado el proyecto
// root es el usuario 
// el 2do root es el password

$db = mysqli_connect('localhost', 'root', 'root', 'APPSALON');

$db->set_charset("utf8");// le digo que $db va a tener codificación de caracteres utf8 para los acentos y Ñ
// este if es para saber su la conexion a la base funciona
// sino funciona va a tirar un Fatal error
if (!$db) {
    echo "Error en la conexion";   
} else{
    
    //echo "conexion correcta"; // lo comento para q no se mire en el navegador como prueba
}
