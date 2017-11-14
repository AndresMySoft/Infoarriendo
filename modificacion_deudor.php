<?php
require "conexion.php";
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
    <h2>Modificar Datos del Deudor Moroso: </h2>
    </strong><img src="imagenes/Modificar.png" width="128" height="128" /><br />
      Las empresas como<strong> inmobiliarias</strong>, <strong>conjuntos residenciales</strong>, <strong>entidades prestadoras de servicios</strong> entre otros... podr&aacute;n: </p>
      <p align="left">&nbsp;</p>
      <p><strong>Modificar </strong>en<span class="Estilo1"> info@rriendo</span> a todas aquellos Individuos  que han evadido el pago de sus inmuebles. </p>
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
    <td width="294"><form name="registro" method="post" action="modificacion.php">
        <table width="284" border="0">
          <tr>
            <td height="32"><h2 align="center">Actualizar Deudor </h2></td>
          </tr>
          <tr>
            <td height="32">Seleccione el Deudor !!! </td>
          </tr>
          <tr>
            <td height="32"><a href="dentro.php">Atras </a></td>
          </tr>
          <tr>
            <td height="15">Deudor: 
              <select name = "deudores">
			  <?php
			  $nick = $_SESSION["nick"];
			  conectar();
			  $query = "select * from deudor where cedula in(select cedula from empresa_deudor where nick = '$nick') order by nombre_deu";
			  $resultado = mysql_query($query);
			  while($row = mysql_fetch_assoc($resultado)){
			  echo "<option value=\"".$row["cedula"]."\">".$row["nombre_deu"]."</option>\n";
			  }
			  ?>
              </select>
             
             
                <input type="submit" name="Submit" value="Modificar" />           </td>
          </tr>
          <tr>
            <td height="15">&nbsp;</td>
          </tr>
		  <tr>
		  <td><p><a href="dentro.php"><img src="imagenes/log-in.png" alt="Atras" width="48" height="48" border="0" /></a>
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
