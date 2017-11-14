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
.Estilo2 {color: #999999}
-->
</style>

<script src="js/validacion.js" type="text/javascript" language="javascript"></script>
</head>

<body>
<p><img src="imagenes/illustration.jpg" width="521" height="208" /></p>
<table width="531" border="0">
  <tr>
    <td width="227" height="438"><strong>
    <h2>Busqueda de Deudores Morosos: </h2>
    </strong>
      <p><strong> </strong><img src="imagenes/listar2.png" width="147" height="147" /></p>
        <p>Las <strong>Personas</strong> En General Podran:</p>
        <ul>
          <li>Buscar</li>
          <li>Listar </li>
        </ul>
        <p><img src="imagenes/inmobiliaria.png" width="167" height="157" /><br />
          Las empresas como<strong> inmobiliarias</strong>, <strong>conjuntos residenciales</strong>, <strong>entidades prestadoras de servicios</strong> entre otros... podr&aacute;n: </p>
        <ul type="disc">
          <li>Registrar</li>
          <li>Modificar</li>
          <li>Eliminar</li>
          <li>Buscar</li>
          <li>Listar</li>
        </ul>
        <p>&nbsp;</p>
        <p>En<span class="Estilo1"> info@rriendo</span> a todas aquellos Individuos  que han evadido el pago de sus inmuebles. </p>
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
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p></td>
    <td width="294"><form name="registro" method="post" action="busqueda_deudores_usuarios.php" onsubmit="return valida_unico(this.deudor.value)">
        <table width="284" border="0">
          <tr>
            <td height="32" colspan="2"><h2 align="center">Buscar Deudores</h2></td>
          </tr>
          <tr>
            <td height="32" colspan="2"><p>Las Personas Pueden Buscar por Numero de Cedula o por El Nombre del Deudor!!! </p>
              <p>&nbsp;</p></td>
          </tr>
          <tr>
            <td height="32" colspan="2"><a href="consulta.html">Atras</a></td>
          </tr>
          <tr>
            <td width="92" height="32">Ingrese Cedula o Nombre :</td>
            <td width="182"><label>
              <div align="center">
                <input name="deudor" id="deudor"type="text" size="30" />
                <span class="Estilo2">(cedula sin puntos ni comas)</span> </div>
            </label></td>
          </tr>
          <tr>
            <td height="32"><label>
              <div align="center"></div>
            </label></td>
            <td><label>
              <div align="center">
                <input type="submit" name="Submit" value="Buscar" />
              </div>
            </label></td>
          </tr>
		  <tr>
		  <td colspan="2"><?php
			
			if(isset($_GET["Error"])){
			echo "<span class=Estilo1>Error: No ingreso <br>Datos para Buscar<br>por favor ingrese Datos!!!</span><img src =                           imagenes/alarma.png width = 30 height = 30>";
			
			}
			if(isset($_GET["Error2"])){
			echo "<span class=EstiloOk>Esta Persona no es un Deudor<br>Persona Recomendada para Arrendar!!</span><img src =                           imagenes/ok.png width = 30 height = 30>";
			
			}
			
			
			?>

		    <p><a href="centro.php"><img src="imagenes/log-in.png" alt="Atras" width="48" height="48" border="0" /></a>
		      <a href="centro.php">Inicio.</a></p>
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
