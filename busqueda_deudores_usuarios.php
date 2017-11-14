<?php

if($_POST["deudor"]){

//agregamos la libreria de conexion
require 'conexion.php';
//recuperamos las varibles pasadas por el usuario
$deu = $_POST["deudor"];
$deudor = strtolower($deu);
//llamamos la funcion conectar al servidor
conectar();

//creamos la consulta para el servidor
$query = "select cedula from deudor where nombre_deu = '$deudor'";
//ejecutamos la consultra y verificamos si se realizo
if($resultado = mysql_query($query)){
//contamos el numero de filas debueltas por  por la consulta
$row = mysql_fetch_assoc($resultado);
$cedula2 = $row["cedula"];
}
else {
$cedula2 = "";
}
$query2 = "select * from empresa_deudor where cedula = '$deudor' or cedula = '$cedula2'";
$query3 = "select empresa.nick as empresa,deudor.nombre_deu as nombre,empresa_deudor.cedula as cedula ,valor, 
                       fecha,empresa_deudor.ciudad as ciudad,tiempo_deuda,empresa_deudor.nick  as nick
                       from empresa_deudor
                       inner join empresa on empresa.nick=empresa_deudor.nick inner join deudor on   deudor.cedula = empresa_deudor.cedula where empresa_deudor.cedula = '$deudor' or empresa_deudor.cedula = '$cedula2'  order by   empresa_deudor.ciudad";

$resultado2 = mysql_query($query2);
$resultado3 = mysql_query($query3);
if($row2 = mysql_fetch_assoc($resultado2)){

   echo ' <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    <h2>Busqueda de Deudores Morosos: </h2>
    </strong>
      <p><strong> </strong><a href="buscar_deudor.php"><img src="imagenes/listar2.png" alt="Consultar" width="127" height="135" border="0" /></a></p>
        <br />
      Las <strong> Personas</strong> En General Podran:</p>
      <p align="left">&nbsp;</p>
      <p><strong>Buscar </strong>en<span class="Estilo1"> info@rriendo</span> a todas aquellos Individuos  que han evadido el pago de sus inmuebles. </p>
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
      <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p></td>
    <td width="294"><form name="registro" method="post" action="delete.php">
        <table width="284" border="0">
          <tr>
            <td height="32" colspan="2"><h2 align="center">Buscar Deudores</h2></td>
          </tr>
		  <tr>
            <td height="32" colspan="2"><p><span class=EstiloError>Deudor Encontrado!!!<img src = alarma.png width = 30 height = 30></span></p></td>
          </tr>
          <tr>
            <td height="32" colspan="2"><a href="buscar_deudor_usuarios.php">Atras </a></td>
          </tr>
          <tr>
            <td width="92" height="32"></td>
            <td width="182"></td>
          </tr>
          <tr>
            <td height="32"><label>
              <div align="center"></div>
            </label></td>
            <td>
';			
while($row3 = mysql_fetch_array($resultado3)){
echo "Empresa: ".$row3['empresa']."<br>";
echo "Deudor: ".$row3['nombre']."<br>";
echo "Cedula: ".$row3["cedula"]."<br>";
echo "Ciudad: ".$row3["ciudad"]."<br>";
echo "Valor: ".$row3["valor"]."<br>";
echo "Fecha: ".$row3["fecha"]."<br>";
echo "tiempo de deuda: ".$row3["tiempo_deuda"]."<br>";
echo "<hr>";
}

echo '
              <div align="center">  
              </div>
            </label></td>
          </tr>
		  <tr>
		  <td colspan="2">
		    <p><a href="centro.php"><img src="log-in.png" alt="Atras" width="48" height="48" border="0" /></a>
		      <a href="centro.php">Inicio.</a></p>
		    <p>&nbsp;</p></td>
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
    <p>&nbsp;</p></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
';
 }
 else
 {
 header("Location: buscar_deudor_usuarios.php?Error2=si");
 }
}
else{   
      header("Location: buscar_deudor_usuarios.php?Error=si");
   }

?>