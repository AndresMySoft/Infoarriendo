<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<script src="js/validacion.js" language="javascript" type="text/javascript"></script>
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
.Estilo3 {color: #999999}
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
      <p><strong> </strong><a href="buscar_deudor.php"><img src="imagenes/consultar.png" alt="Consultar" width="127" height="135" border="0" /></a></p>
        <br />
      Las empresas como<strong> inmobiliarias</strong>, <strong>conjuntos residenciales</strong>, <strong>entidades prestadoras de servicios</strong> entre otros... podr&aacute;n: </p>
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
      <p align="left">&nbsp;</p>
      <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p></td>
    <td width="294"><form name="registro" method="post" action="busqueda_deudores.php" onsubmit="return valida_unico(this.deudor.value)">
        <table width="284" border="0">
          <tr>
            <td height="32" colspan="2"><h2 align="center">Buscar Deudores</h2></td>
          </tr>
          <tr>
            <td height="32" colspan="2"><p>Las Empresas Pueden Buscar por Numero de Cedula o por El Nombre del Deudor!!! </p>
              <p>&nbsp;</p></td>
          </tr>
          <tr>
            <td height="32" colspan="2"><a href="dentro.php">Atras </a></td>
          </tr>
          <tr>
            <td width="92" height="32">Ingrese Cedula o Nombre :</td>
            <td width="182"><label>
              <div align="center">
                <input id="deudor" name="deudor" type="text" size="30" />
                <span class="Estilo3">(cedula sin puntos ni comas) </span></div>
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
			echo "<span class=Estilo1>Error: No ingreso <br>Datos para Buscar<br>por favor ingrese Datos!!!</span><img src = alarma.png width = 30 height = 30>";
			
			}
			if(isset($_GET["Error2"])){
			echo "<span class=EstiloOk>Esta Persona no es un Deudor<br>Persona Recomendada para Arrendar!!</span><img src =                           imagenes/ok.png width = 30 height = 30>";
			
			}
			
			
			?>
		    <p><a href="dentro.php"><img src="imagenes/log-in.png" alt="Atras" width="48" height="48" border="0" /></a>
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
