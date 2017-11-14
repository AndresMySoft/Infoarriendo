<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.EstiloError{
     color: #FF0000;}
.Estilo1 {
	color: #0000FF;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<p><img src="imagenes/illustration.jpg" width="521" height="208" border="0" /></p>
<p>
<h2>Bienvenido al Sistema: </h2>
<?php
  $usuario = $_SESSION["nick"];
  echo $usuario;
?>

<p>Nit o Rut:</p><?php $id = $_SESSION["nitrut"]; echo $id; ?>
<p><strong>Servicios:</strong></p>
<table width="516" height="115" border="0">
  <tr>
    <td width="250"><div align="center"><a href="registro_deudor.php"><img src="imagenes/moroso.png" name="Moroso" width="128" height="128" border="0" id="Moroso" /></a></div></td>
    <td width="250"><div align="center"><a href="buscar_deudor.php"><img src="imagenes/consultar.png" alt="Consultar" width="127" height="135" border="0" /></a></div></td>
  </tr>
  <tr>
    <td><div align="center"><strong>Ingresar Deudor </strong></div></td>
    <td><div align="center"><strong>Buscar Deudor </strong></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"><a href="Listar_deudores.php"></a><a href="Listar_deudores.php"><img src="imagenes/list.png" width="133" height="117" border="0" /></a></div></td>
    <td><div align="center"><a href="modificacion_deudor.php"><img src="imagenes/Modificar.png" alt="Modificar" width="128" height="128" border="0" /></a></div></td>
  </tr>
  <tr>
    <td><div align="center"><strong>Listar Dedores </strong></div></td>
    <td><div align="center"><strong>Modificar Datos Deudor </strong></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"><a href="eliminar_deudor.php"><img src="imagenes/eliminar.png" alt="Eliminar" width="148" height="117" border="0" /></a></div></td>
    <td><div align="center"><a href="centro.php"><img src="imagenes/salir.png" alt="Salir" width="143" height="124" border="0" /></a></div></td>
  </tr>
  <tr>
    <td><div align="center"><strong>Eliminar Deudor de Lista Negra </strong></div></td>
    <td><div align="center"><strong>Salir</strong></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"><a href="modificacion_perfil.php"><img src="imagenes/inmobiliaria.png" width="163" height="132" border="0" /></a></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"><strong>Modificar Perfil </strong></div></td>
    <td><span class="Estilo1">Le Recomendamos Cambiar su Contrase&ntilde;a Periodicamente.</span> </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
