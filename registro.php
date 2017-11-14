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
-->
</style>
</head>

<body>
<p><img src="imagenes/illustration.jpg" width="521" height="208" /></p>
<table width="519" border="0">
  <tr>
    <td width="227" height="438"><strong>
      <h2>Empresas</h2></strong><strong> </strong></p>
      <img src="imagenes/inmobiliaria.png" width="126" height="121" /><br />
      Las empresas como<strong> inmobiliarias</strong>, <strong>conjuntos residenciales</strong>, <strong>entidades prestadoras de servicios</strong> entre otros... podr&aacute;n:
      <ul type="disc">
        <li>Registrar</li>
        <li>Modificar</li>
        <li>Eliminar</li>
        <li>Buscar</li>
        <li>Listar</li>
        </ul>
      <p>En<span class="Estilo1"> info@rriendo</span> a todas aquellas personas  que han evadido el pago de sus inmueblesu otros Servicios. </p>
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
    <td width="282"><form name="registro" method="post" action="insert.php" onsubmit="return valida_registro(this.usuario.value,this.pass.value,this.pass2.value,this.prop.value,this.cc.value,this.nitrut.value,this.dir.value,this.telefono.value,this.ciudad.value,this.correo.value,this.acepto)">
        <table width="276" border="0">
          <tr>
            <td height="32" colspan="2"><h2 align="center">Registro de Usuarios </h2></td>
          </tr>
          <tr>
            <td width="91" height="32">Empresa:</td>
            <td width="175"><label>
              <input name="usuario" type="text" id="usuario" />
            </label></td>
          </tr>
          <tr>
            <td height="32">Contrase&ntilde;a:</td>
            <td><label>
              <input name="pass" type="password" id="pass" />
            </label></td>
          </tr>
          <tr>
            <td height="32">Confirmar Contrase&ntilde;a: </td>
            <td><input name="pass2" type="password" id="pass2" /></td>
          </tr>
          <tr>
            <td height="32">Propietario:</td>
            <td><input name="prop" type="text" id="prop" /></td>
          </tr>
          <tr>
            <td height="32">Cedula:</td>
            <td><input name="cc" type="text" id="cc" /></td>
          </tr>
          <tr>
            <td height="32">Nit o Rut: </td>
            <td><input name="nitrut" type="text" id="nitrut" /></td>
          </tr>
          <tr>
            <td height="32">Direccion:</td>
            <td><input name="dir" type="text" id="dir" /></td>
          </tr>
          <tr>
            <td height="32">Telefono</td>
            <td><input name="telefono" type="text" id="telefono" /></td>
          </tr>
          <tr>
            <td height="32">Ciudad:</td>
            <td><input name="ciudad" type="text" id="ciudad" /></td>
          </tr>
          <tr>
            <td height="32">Email:</td>
            <td><label>
              <input name="correo" type="text" id="correo" />
            </label></td>
          </tr>
          <tr>
            <td height="32">Tipo:</td>
            <td><label>
              <select name="tipo">
                <option value =  "1">Inmobiliaria</option>
                <option value = "2">Conjunto Residencial</option>
                <option value =  "3">Empresa de Servicios</option>
                <option value =  "4">Otro</option>
              </select>
            </label></td>
          </tr>
          <tr>
            <td height="32">Terminos:</td>
            <td>Acepto:
              <label>
              <input type="checkbox" name="acepto" value="checkbox" />
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
en ningun momento se le cobrara por el servicio.

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
			if(isset($_GET["Error"])){
			echo "<span class=EstiloError>Propietario o Cedula Incorrectos<br>vuelva a ingresar los <br>datos por favor!</span>";
			
			}
			if(isset($_GET["Error2"])){
			echo "<span class=EstiloError>Error: La inserccion de<br>los datos no se realizo<br>por favor verifique<br>los datos insertados!!!</span><img src =                   imagenes/alarma.png width = 30 height = 30>";
			
			}
			if(isset($_GET["registrado"])){?>
			<script language="javascript">
			alert("Empresa Registrada");
			</script><?php
			echo "<span class=EstiloOk>Empresa Registrada!!!<img src = imagenes/ok.png width = 30 height = 30></span>";
			}

			if(isset($_GET["Error3"])){
			echo "<span class=EstiloError>Error: Empresa ya existe<br>ingrese otra<br>por favor!!!</span><img src = imagenes/alarma.png width = 30 height = 30>";
			
			}
			if(isset($_GET["Error4"])){
			echo "<span class=EstiloError>Error:<br>Acepte los Terminos<br>en la casilla de <br>verificacion Acepto!!!</span><img src =imagenes/alarma.png width = 30 height = 30>";
			}
			if(isset($_GET["Error5"])){
			echo "<span class=EstiloError>Error:<br>Contraseñas No Coinciden<br>Vuelva a Intentar!!!</span><img src =                    imagenes/alarma.png width = 30 height = 30>";
			
			}
			?></td>
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
