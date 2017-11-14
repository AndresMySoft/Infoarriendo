<?php
function conectar(){
$basedatos = "infoarriendo"; //base de datos
$conexion = mysql_connect("localhost","root","");
if(!$conexion){
echo "<h2 align = 'center'>imposible establecer conexion con el servidor</h2>".mysql_error();
exit;
}
if(!mysql_select_db($basedatos)){

echo "no ha sido posible seleccionar la BD: ".mysql_error();
exit;

}

}
?>
