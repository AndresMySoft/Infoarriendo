<?php
//agregamos la libreria de conexion
require 'conexion.php';
//recuperamos las varibles pasadas por el usuario
$deu = $_POST["deudor"];
$deudor = strtolower($deu); //para convertir en minusculas el usuario
$identificacion = $_POST["identificacion"];
$ciu = $_POST["ciudad"];
$ciudad = strtolower($ciu); //para convertir en minusculas el usuario
$valor = $_POST["valor"];
$fecha = $_POST["fecha"];
$tiempo = $_POST["tiempo"];
session_start();
$nick = $_SESSION["nick"];
$cedula = $_SESSION["cedula_deudor"];

//llamamos la funcion conectar al servidor
conectar();
//creamos la consulta para el servidor
$query = "update empresa_deudor set cedula = '$identificacion',ciudad = '$ciudad', valor = '$valor',tiempo_deuda = '$tiempo',fecha = '$fecha' where cedula = '$cedula' and nick = '$nick'";
$query2 = "update deudor  set cedula = '$identificacion',nombre_deu = '$deudor' where cedula = '$cedula'";
//verificamos si la consulta se ejecuta extisamente
if(!mysql_query($query2)){
   echo "La modificacion de los datos no se realizo ya Existe Alguien con esta Cedula";
   }
else{
   
   if(!mysql_query($query)){
   
     echo "La modificacion de los datos no se realizo Error".mysql_error();
   }
   else{
    echo "la modificacion de los datos se realizo correctamente";
   
   }
   

}
   

?>
<html>
<head></head>
<body>
<p><a href="dentro.php"><img src="imagenes/log-in.png" alt="Atras" width="48" height="48" border="0" /></a>
		      <a href="dentro.php">Servicios.</a></p>
</body>
</html>