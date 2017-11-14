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
.Estilo2 {font-size: 9px}
.Estilo3{ color:#FFFFFF;}
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
            <td height="32" colspan="2"><h2 align="center">Datos del  Deudor </h2></td>
          </tr>
          <tr>
            <td height="32" colspan="2">En este espacio puede modificar los datos del deudor: </td>
          </tr>
          <tr>
            <td height="32" colspan="2"><a href="modificacion_deudor.php">Atras </a></td>
          </tr>
		  		<?php 
				
			
			if(isset ($_POST["deudores"]))
			{
			   // print_r($_POST);
			    require "conexion.php";
				conectar();
				session_start();
			    $cedula = $_POST["deudores"];
				$nick = $_SESSION["nick"];
				$query = "select * from empresa_deudor where cedula = '$cedula' and nick = '$nick'";
				$query2 = "select nombre_deu from deudor where cedula = '$cedula'";
				$resultado = mysql_query($query);
				$resultado2 = mysql_query($query2);
                //contamos el numero de filas debueltas por  por la consulta
                $row = mysql_fetch_assoc($resultado);
				$row2 = mysql_fetch_assoc($resultado2);
				$_SESSION["cedula_deudor"] = $row["cedula"];
             echo '
          <tr>
            <td width="105" height="32">Nombre:</td>
            <td width="169"><label>
	 <input type="text" name="deudor" value =\''.$row2['nombre_deu'].'\'>
            </label></td>
          </tr>
          <tr>
            <td height="32">Identificacion:<span class="Estilo2"><span class="Estilo3">---</span>(sin puntos ni comas) </span></td>
            <td height="32"><input type="text" name="identificacion" value =\''.$row['cedula'].'\'></td>
          </tr>
          <tr>
            <td height="32">Ciudad:</td>
            <td height="32"><input type="text" name="ciudad" value =\''.$row['ciudad'].'\'></td>
          </tr>
          <tr>
            <td height="32">Valor Deuda: </td>
            <td height="32"><input type="text" name="valor" value =\''.$row['valor'].'\'></td>
          </tr>
          <tr>
            <td height="32">Tiempo Deuda: </td>
            <td height="32"><input type="text" name="tiempo" value =\''.$row['tiempo_deuda'].'\'></td>
          </tr>
          <tr>
            <td height="32">Fecha:</td>
            <td height="32"><input type="text" name="fecha" value =\''.$row['fecha'].'\'></td>
          </tr>
          <tr>
            <td height="15">&nbsp;</td>
			
			
            <td height="15"><label>
              <div align="center">
                <input type="submit" name="Submit" value="Modificar" />
                </div>
            </label></td>
          </tr>';
		  }
		   
			else{
			   echo "No hay Deudores para Modificar¡¡¡¡";
			   
			   }
			?>
		
		 
		  
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
