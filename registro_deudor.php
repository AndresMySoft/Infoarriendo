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
.Estilo2 {font-size: 9px}
-->
</style>
</head>

<body>
<p><img src="imagenes/illustration.jpg" width="521" height="208" /></p>
<table width="531" border="0">
  <tr>
    <td width="227" height="438"><strong>
    <h2>Ingreso de Deudores Morosos: </h2>
    </strong>
      <p><strong> </strong>
      </p>
        <img src="imagenes/moroso.png" alt="Deudor" width="128" height="128" /><br />
      Las empresas como<strong> inmobiliarias</strong>, <strong>conjuntos residenciales</strong>, <strong>entidades prestadoras de servicios</strong> entre otros... podr&aacute;n: </p>
      <p align="left">&nbsp;</p>
      <p><strong>Registrar </strong>en<span class="Estilo1"> info@rriendo</span> a todas aquellos Individuos  que han evadido el pago de sus inmuebles. </p>
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
    <td width="294"><form name="registro" method="post" action="deudores.php" onsubmit="return valida_registroDeudor(this.deudor.value,this.id.value,this.ciudad.value,this.valor.value,this.time.value,this.fecha.value,this.acepto)">
        <table width="284" border="0">
          <tr>
            <td height="32" colspan="2"><h2 align="center">Registro de Deudores</h2></td>
          </tr>
          <tr>
            <td height="32" colspan="2">Ingrese todos los campos!!! </td>
          </tr>
          <tr>
            <td height="32" colspan="2"><a href="dentro.php">Atras </a></td>
          </tr>
          <tr>
            <td width="113" height="32">Nombre:</td>
            <td width="161"><label>
              <input name="deudor" type="text" id="deudor" />
            </label></td>
          </tr>
          <tr>
            <td height="32">Identificacion<span class="Estilo2">:(sin puntos ni comas) </span>
            </td>
            <td><label>
              <input name="id" type="text" id="id" />
            </label></td>
          </tr>
          <tr>
            <td height="32">Ciudad:</td>
            <td><input name="ciudad" type="text" id="ciudad"/></td>
          </tr>
          <tr>
            <td height="32">Valor Deuda:</td>
            <td><input name="valor" type="text" id="valor" value ="$" /></td>
          </tr>
          <tr>
            <td height="32">Tiempo Deuda:</td>
            <td><input name="time" type="text" id="time" value ="En meses" /></td>
          </tr>
          <tr>
            <td height="32">Fecha:</td>
            <td><input name="fecha" type="text" id="fecha" value ="dd/mm/yyyy"/></td>
          </tr>
          <tr>
            <td height="32">Terminos:</td>
            <td>Acepto:
              <label>
              <input type="checkbox" name="acepto" value="checkbox" id="acepto"/>
              <textarea name="textarea" rows="2" readonly="true">info@rriendo y su creador NO se hacen 
responsables por el uso de la
informacion suminstrada en nuestra  
pagina web.

Toda la responsabilidad la asumira la
empresa registrada y es a esta
donde se deberan comunicar
en caso de reclamos por parte de
los Deudores "Morosos".

Es importante que toda la informacion
registrada sea veridica.En caso de suplantacion
o fraude sera expulsado de nuestra
base de datos y red.

info@rriendo en un lapso de 72 horas
verificara la informacion suministrada
de no ser veridica info@rriendo lo expulsara 
inmediatamente de nuestra Red y base de datos
junto con todos sus datos y Deudores
"Morosos" registrados.

info@rriendo es totalmente gratis por lo que 
en ningun momento se le cobrara por el servicio
no se deje engañar.

si acepta todas estas condiciones por favor chekear
la caja de verificacion acepto de no ser asi
no se podra registrar Gracias.
              </textarea>
            </label></td>
          </tr>
          <tr>
            <td height="32"><label>
              <div align="center">
                <input type="submit" name="Submit" value="Registrar" />
              </div>
            </label></td>
            <td><label>
              <div align="center">
                <input type="reset" name="Submit2" value="Limpiar" />
              </div>
            </label></td>
          </tr>
		  <tr>
		  <td colspan="2"><?php
			
			if(isset($_GET["Error2"])){
			echo "<span class=EstiloError>Error: La inserccion de<br>los datos no se realizo<br>por favor verifique<br>los datos insertados!!!</span><img src =                   imagenes/alarma.png width = 30 height = 30>";
			
			}
			if(isset($_GET["registrado"])){?>
			<script language="javascript">
			alert("Deudor Reportado");
			</script><?php
			echo "<span class=EstiloOk>Deudor Reportado!!!<img src = imagenes/ok.png width = 30 height = 30></span>";
		
			}
			if(isset($_GET["Error3"])){
			echo "<span class=EstiloError>Deudor ya existe</span><br><span class=EstiloOk>Deudor Reportado!!!</span><img src = imagenes/ok.png                    width = 30 height = 30>";
			
			}
			if(isset($_GET["Error4"])){
			echo "<span class=EstiloError>Error: La inserccion de<br>los datos no se realizo.<br>EL Deudor ya ha sido <br>Reportado por usted!!!</span><img src =                   imagenes/alarma.png width = 30 height = 30><br><span class=EstiloOk>Registre otro Deudor!!!</span>";
			
			}
			
			if(isset($_GET["Error5"])){
			echo "<span class=EstiloError>Error:<br>Acepte los Terminos<br>en la casilla de <br>verificacion Acepto!!!</span><img src =imagenes/alarma.png width = 30 height = 30>";
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
    <p>&nbsp;</p></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
