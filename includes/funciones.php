
<?php
// consultar una base de datos (se hace en tres pasos)
// : array es decirle q lña funcion retorna un arreglo
function obtenerServicios() : array
{
// try catch en PHP se utiliza en puntos criticos de la aplicacion
// para que saque el try catch automaticamente fijarme que diga try catch block
// funciona igual que en javascript
try {
    //code...


// paso 1 importar conexion
require 'database.php';

// paso 2 escribir codigo SQL (se escribe tal cual en SQL)
$sql = "SELECT * FROM servicios;";

// mysqli_query nos va a permitir consultar una base de datos ya en PHP
// este toma dos argumentos 1 la base que nos estamos conectando ya definida en database.php
// 2 la consulta SQL que esta arriba como $sql
$consulta = mysqli_query($db, $sql);

// paso 3 obtener los resultados

//Arreglo vacio (sirve para agrupar todo en un solo areglo)
$servicios = [];
 $i = 0; // contador para ayudarnos agrupar el arreglo
//mysqli_fetch_assoc convierte los resultados a un arreglo asociativo PHP (mostrando  solo uno)
//mysqli_fetch_all convierte los resultados a un arreglo PHP (mostrando  todo)
// el while se va a ejecutar siempre que tengamos resultados
// $row es cada uno de los registros
while( $row = mysqli_fetch_assoc($consulta)){
$servicios[$i]["id"] = $row["id"];
$servicios[$i]["nombre"] =$row["nombre"];
$servicios[$i]["precio"] =$row["precio"];

$i++;
};

return $servicios;

// echo "<pre>";
// var_dump($servicios);
// echo "</pre>";



} catch (\Throwable $th) {
    //throw $th;
    //aca tira el error poniendole un var_dump al $th que ya viene
    var_dump($th);
}
    
}

//mandamos a llamar las funciones
obtenerServicios();
