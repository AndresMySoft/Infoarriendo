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
.Estilo2 {color: #000000}
-->
</style>
</head>

<body>
<p><img src="imagenes/illustration.jpg" width="521" height="208" /></p>
<table width="519" border="0">
  <tr>
    <td width="227" height="438"><strong>
      <h2>Cambio de Contrase&ntilde;a: </h2>
    </strong>
      <p><strong> </strong>
        </p>
        <img src="imagenes/pass.png" width="121" height="117" /><br />
 </p>
      <p><span class="Estilo1"><span class="Estilo2">Le Recomendamos Cambiar su Contrase&ntilde;a Periodicamente</span>.</span>       </p>
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
    <p align="left">&nbsp;</p></td>
    <td width="282"><form name="registro" method="post" action="update_pass.php" onsubmit="return valCambioPass(this.pass.value,this.pass2.value,this.pass3.value)">
        <table width="276" border="0">
          <tr>
            <td height="32" colspan="2"><h2 align="center">Cambiar Contrase&ntilde;a </h2></td>
          </tr>
          <tr>
            <td height="32" colspan="2"><a href="modificacion_perfil.php">Atras </a></td>
          </tr>
          <tr>
            <td width="91" height="32">Contrase&ntilde;a:</td>
            <td width="175"><label>
              <input name="pass" type="password" id="pass" />
            </label></td>
          </tr>
          <tr>
            <td height="32">Nueva Contrase&ntilde;a:</td>
            <td><label>
              <input name="pass2" type="password" id="pass2" />
            </label></td>
          </tr>
          <tr>
            <td height="32">Confirmar Nueva Contrase&ntilde;a: </td>
            <td><input name="pass3" type="password" id="pass3" /></td>
          </tr>
          <tr>
            <td height="32"><label>
              <div align="center"></div>
            </label></td>
            <td><label>
              <div align="center">
                <input type="submit" name="Submit" value="Aceptar" />
              </div>
            </label></td>
          </tr>
		  <tr>
		  <td colspan="2"><?php
			if(isset($_GET["Error"])){
			echo "<span class=EstiloError>No se Pudo Modificar Contraseña<br>vuelva a ingresar los <br>datos por favor!</span>";
			
			}
			if(isset($_GET["Error2"])){
			echo "<span class=EstiloError>Contraseña Nueva no Coincide<br>vuelva a ingresar los <br>datos por favor!</span>";
			
			}
			if(isset($_GET["Error3"])){
			echo "<span class=EstiloError>Contraseña Invalida<br>vuelva a ingresar los <br>datos por favor!</span>";
			
			}
			if(isset($_GET["modificado"])){
			echo "<span class=EstiloOk>Contraseña Actualizada!!!<img src = imagenes/ok.png width = 30 height = 30></span>";
		
			}
			
			
			
			?></td>
		  </tr>
		  <tr>
		    <td colspan="2"><img src="imagenes/log-in.png" alt="Atras" width="48" height="48" border="0" /></a>
		      <a href="dentro.php">Servicios.</a></td>
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
    <p>&nbsp;</p></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
