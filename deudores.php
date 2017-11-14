<?php
//agregamos la libreria de conexion
require 'conexion.php';
//recuperamos las varibles pasadas por el usuario
$acepto = $_POST["acepto"];
$deu = $_POST["deudor"];
$deudor = strtolower($deu);
$id = $_POST["id"];
$ciu = $_POST["ciudad"];
$ciudad = strtolower($ciu);
$valor = $_POST["valor"];
$tiempo = $_POST["time"];
$fecha = $_POST["fecha"];
session_start();
$nick = $_SESSION["nick"];
//llamamos la funcion conectar al servidor
conectar();

//creamos la consulta para el servidor
$query = "select * from deudor where cedula = '$id' and  nombre_deu = '$deudor'";
$query1 = "insert into deudor(cedula,nombre_deu) values ('$id','$deudor')";
$query2 = "insert into empresa_deudor(nick,cedula,ciudad,valor,tiempo_deuda,fecha) values ('$nick','$id','$ciudad','$valor','$tiempo','$fecha')";
$query3 = "select * from empresa_deudor where nick = '$nick' and  cedula  = '$id'";
//ejecutamos la consultra y verificamos si se realizo

//ejecutamos la consulta
$resultado = mysql_query($query);
$resultado3 = mysql_query($query3);
//contamos el numero de filas debueltas por  por la consulta
$filas = mysql_num_rows($resultado);
$filas3 = mysql_num_rows($resultado3);

if($acepto){
if(!$filas3){  
if(!mysql_query($query2)){
 header("Location: registro_deudor.php?Error2=si");
 }
 else { 
    if(!$filas){ 
       mysql_query($query1);
	   header("Location: registro_deudor.php?registrado=si");
       }
	 else{
        header("Location: registro_deudor.php?Error3=si");
         }
     } 
}
else{
        header("Location: registro_deudor.php?Error4=si");
         } 
 }else{
 
 header("Location: registro_deudor.php?Error5=si");
 } 
?>