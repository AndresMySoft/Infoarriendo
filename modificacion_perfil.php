<?php
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
    <h2>Actualizar Datos de La Empresa: </h2>
    </strong>
      <p><a href="modificacion_perfil.php"><img src="imagenes/inmobiliaria.png" width="163" height="132" border="0" /></a></p>
      <p>Si esta es su primera vez en el sistema le recomendamos modificar su <strong>PERFIL.</strong></p>
      <p>para que pueda recuperar su contrase&ntilde;a en caso de olvido o perdida      </p>
      <p align="left"><span class="Estilo1">info@rriendo</span> la Solucion.</p>
      <table width="200" border="0">
        <tr>
          <td><div align="center"><a href="cambio_pass.php"><img src="imagenes/pass.png" width="64" height="67" border="0" /></a></div></td>
        </tr>
        <tr>
          <td><div align="center"><strong>Cambiar Contrase&ntilde;a </strong></div></td>
        </tr>
      </table></p>
      <p align="left">.</p>
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
      <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p></td>
    <td width="294"><form name="registro" method="post" action="update_empresa.php">
        <table width="284" border="0">
          <tr>
            <td height="32" colspan="2"><h2 align="center">Datos Del  Propietario </h2></td>
          </tr>
          <tr>
            <td height="32" colspan="2">En este espacio puede modificar los datos del Propietario: </td>
          </tr>
          <tr>
            <td height="32" colspan="2"><a href="dentro.php">Atras </a></td>
          </tr>
		  		<?php 
			   // print_r($_POST);
			    require "conexion.php";
				conectar();
				$nick = $_SESSION["nick"];
				$query = "select * from empresa  where  nick = '$nick'";
			
				$resultado = mysql_query($query);
				
                //contamos el numero de filas debueltas por  por la consulta
                $row = mysql_fetch_assoc($resultado);
				$cedula = $row['cc_propietario'];
			    $query2 = "select * from propietario where cc_propietario = '$cedula'";
				$resultado2 = mysql_query($query2);
				$row2 = mysql_fetch_assoc($resultado2);
				$_SESSION["cedula_prop"]= $row2["cc_propietario"];
				
             echo '
          <tr>
            <td width="105" height="32">Nombre:</td>
            <td width="169"><label>
	 <input type="text" name="prop" value =\''.$row2['nombre_prop'].'\'>
            </label></td>
          </tr>
          <tr>
            <td height="32">Cedula:</td>
            <td height="32"><input type="text" name="identificacion" value =\''.$row2['cc_propietario'].'\'></td>
          </tr>
          <tr>
            <td height="32">Ciudad:</td>
            <td height="32"><input type="text" name="ciudad" value =\''.$row2['ciudad_prop'].'\'></td>
          </tr>
          <tr>
            <td height="32">Telefono: </td>
            <td height="32"><input type="text" name="telefono" value =\''.$row2['telefono_prop'].'\'></td>
          </tr>
          <tr>
            <td height="32">Telefono Movil: </td>
            <td height="32"><input type="text" name="celular" value =\''.$row2['movil_prop'].'\'></td>
          </tr>
          <tr>
            <td height="32">Email:</td>
            <td height="32"><input type="text" name="correo" value =\''.$row2['correo_prop'].'\'></td>
          </tr>
          <tr>
            <td height="15">&nbsp;</td>
			
			
            <td height="15"><label>
              <div align="center">
                <input type="submit" name="Submit" value="Actualizar" />
                </div>
            </label></td>
          </tr> 
		  <tr>
		  <td colspan="2"><p><a href="dentro.php"><img src="imagenes/log-in.png" alt="Atras" width="48" height="48" border="0" /></a>
		      <a href="dentro.php">Servicios.</a></p>
		    <p>&nbsp;</p>		    </td>
		  </tr>
		 <tr>
            <td height="32" colspan="2"><hr></td>
          </tr>
		  <tr>
            <td height="32" colspan="2"><h2 align="center">Datos De La Empresa </h2></td>
          </tr>
          <tr>
            <td height="32" colspan="2">En este espacio puede modificar los datos de la Empresa: </td>
          </tr>
          <tr>
            <td height="32" colspan="2"><a href="dentro.php">Atras </a></td>
          </tr> <tr>
            <td width="105" height="32">Empresa:</td>
            <td width="169"><label><strong>
	       '.$row['nick'].'</strong>
            </label></td>
          </tr>
          <tr>
            <td height="32">Nit o Rut:</td>
            <td height="32"><label><strong>'.$row['nit_rut'].'</strong></td>
          </tr>
          <tr>
            <td height="32">Ciudad:</td>
            <td height="32"><input type="text" name="ciudad_empresa" value =\''.$row['ciudad'].'\'></td>
          </tr>
          <tr>
            <td height="32">Telefono: </td>
            <td height="32"><input type="text" name="telefono_empresa" value =\''.$row['telefono'].'\'></td>
          </tr>
          <tr>
            <td height="32">Direccion:</td>
            <td height="32"><input type="text" name="direccion" value =\''.$row['direccion'].'\'></td>
          </tr>
          <tr>
            <td height="32">Email:</td>
            <td height="32"><input type="text" name="correo_empresa" value =\''.$row['correo'].'\'></td>
          </tr>
          <tr>
            <td height="15">&nbsp;</td>
			
			
            <td height="15"><label>
              <div align="center">
                <input type="submit" name="Submit2" value="Actualizar" />
                </div>
            </label></td>
          </tr>';
			?>
		
		 
		  
		  <tr>
		  <td colspan="2"><p><a href="dentro.php"><img src="imagenes/log-in.png" alt="Atras" width="48" height="48" border="0" /></a>
		      <a href="dentro.php">Servicios.</a></p>
		    <p>&nbsp;</p>
		    </td>
		  </tr>
        </table>
      </form>
      
      <p><strong>NOTA::</strong> Por Seguridad <strong>El Nombre de la Empresa NO</strong> se puede Modificar <strong>Los Demas Datos SI</strong> , Si Desea Modificarla Elimine el Registro Y cree Uno Nuevo con los  Datos</p>
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
