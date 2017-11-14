<?php
//recuperamos las varibles pasadas por el usuario
//agregamos la libreria de conexion
require 'conexion.php';
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo1 {
	color: #0000FF;
	font-weight: bold;
}
.EstiloError{
     color: #FF0000;}
	 .EstiloOk{
     color:#009900}
-->
</style>
</head>

<body>
<p><img src="imagenes/illustration.jpg" width="521" height="208" /></p>
<table width="531" border="0">
  <tr>
    <td width="227" height="438"><strong>
    <h2>Eliminar Deudor De Lista Negra:  </h2>
    </strong><img src="imagenes/eliminar.png" width="152" height="139" /><br />
      Las empresas como<strong> inmobiliarias</strong>, <strong>conjuntos residenciales</strong>, <strong>entidades prestadoras de servicios</strong> entre otros... podr&aacute;n: </p>
      <p align="left">&nbsp;</p>
      <p><strong>Eliminar </strong>en<span class="Estilo1"> info@rriendo</span> a todas aquellos Individuos  que han evadido el pago de sus inmuebles. </p>
      <p align="left"><span class="Estilo1">info@rriendo</span> la Solucion.</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p></td>
    <td width="294"><form name="registro" method="post" action="update.php">
        <table width="284" border="0">
          <tr>
            <td height="32" colspan="2"><h2 align="center">Eliminar  Deudor </h2></td>
          </tr>
          <tr>
            <td height="32" colspan="2"><?php

$nick = $_SESSION["nick"];
$cedula = $_SESSION["cedula"];

//llamamos la funcion conectar al servidor
conectar();
//creamos la consulta para el servidor
$query = "delete from empresa_deudor  where cedula = '$cedula' and nick = '$nick'";
$query2 = "delete from deudor where cedula = '$cedula'";
$consulta = "select * from empresa_deudor where cedula = '$cedula'";


//verificamos si la consulta se ejecuta extisamente
if(!mysql_query($query)){
   echo "La modificacion de los datos no se realizo Error".mysql_error();
   }

   else{
     echo "El Deudor Fue Eliminado de su Lista de Deudores";
	 
	 $resultado = mysql_query($consulta);
          //contamos el numero de filas debueltas por  por la consulta
           $filas = mysql_num_rows($resultado);
          if(!$filas){
              mysql_query($query2);
                     }
   }

?>
</td>
          </tr>
          <tr>
            <td height="32" colspan="2"><a href="eliminar_deudor.php">Atras </a></td>
          </tr>

 <tr>
		  <td colspan="2"><p><a href="dentro.php"><img src="imagenes/log-in.png" alt="Atras" width="48" height="48" border="0" /></a>
		      <a href="dentro.php">Servicios.</a></p>
		    <p>&nbsp;</p>		    </td>
		  </tr>
        </table>
      </form>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>