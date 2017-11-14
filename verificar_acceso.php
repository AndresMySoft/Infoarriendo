<?php
//agregamos la libreria de conexio
require 'conexion.php';
//llamo la funcion conectar al servidor
conectar();
$user = $_POST[usuario];
$nick = strtolower($user);
//creamos la consulta para el servidor
$query = "select * from empresa where nick = '$nick'  and pass = '$_POST[pass]'";
//ejecutamos la consulta
$resultado = mysql_query($query);
//contamos el numero de filas debueltas por  por la consulta
$filas = mysql_num_rows($resultado);
//obtenemos los datos debueltos en un array
$row = mysql_fetch_assoc($resultado);
//berificamos si la consulta concuerda con algun usuario
if(!$filas){
header("Location: centro.php?Error=si");
}
else{
session_start(); //iniciamos la sesion
//declaramos los valores de la sesion del usuario con valores
$_SESSION["nick"] = $row["nick"];
$_SESSION["pass"] = $row["pass"];
$_SESSION["nitrut"] = $row["nit_rut"];
header("Location: dentro.php");
}

?>