<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<script src="js/validacion.js" type="text/javascript" language="javascript"></script>
</head>

<body>
<?php
function leer_archivo($archivo){
$descriptor = fopen($archivo,"a+");
$tamano = filesize($archivo);
if($tamano > 0){
$contenido = fread($descriptor,$tamano);
}
else{
$contenido = "No hay comentarios";
}
fclose($descriptor);
return $contenido;
}

function escribir_archivo($archivo,$nombre,$correo,$asunto,$desc){
$descriptor = fopen($archivo,"a");
$nombre1 = "\n<tr><td><label><strong>Nombre: </strong> </label>$nombre</td></tr>";
$correo1 = "\n<tr><td><label><strong>Correo: </strong> </label>$correo</td></tr>";
$asunto1 = "\n<tr><td><label><strong>Asunto: </strong> </label>$asunto</td></tr>";
$desc1   = "\n<tr><td><label><strong>Descripcion: </strong> </label>$desc</td></tr><tr><td><hr></td></tr>";
fwrite($descriptor,$nombre1);
fwrite($descriptor,$correo1);
fwrite($descriptor,$asunto1);
fwrite($descriptor,$desc1);
fclose($descriptor);

}


?><p><img src="imagenes/illustration.jpg" width="521" height="208" /></p>
<h2>Comentarios </h2>
<p>Escriban sus Dudas o Inquietudes a todas les daremos respuesta.</p>
<form id="form1" name="form1" method="post" action="comentarios.php" onsubmit="return valida_comentario(this.nombre.value,this.correo.value,this.asunto.value)">
  <table width="351" border="0">
    <tr>
      <td width="99">Nombre:</td>
      <td width="236">
        <input name="nombre" type="text" id="nombre" size="40" />
     </td>
    </tr>
    <tr>
      <td>Correo:</td>
      <td>
        <input name="correo" type="text" id="correo" size="40" />
      </td>
    </tr>
    <tr>
      <td>Asunto:</td>
      <td>
        <input name="asunto" type="text" id="asunto" size="40" />
      </td>
    </tr>
    <tr>
      <td colspan="2"><label><br />
        <textarea name="desc" cols="53" rows="5" id="desc"></textarea>
</label></td>
    </tr>
	<tr>
	<td colspan="2"><div align="right">
	  <input type="submit" value = "enviar" />
	  </div></td>
	</tr>
  </table>
</form>
<table witch = "351" border = "0"> 
<?php
if(isset($_POST["nombre"]) || isset($_POST["correo"]) || isset($_POST["asunto"]) || isset($_POST["desc"])){
escribir_archivo("comentarios.txt",$_POST["nombre"],$_POST["correo"],$_POST["asunto"],$_POST["desc"]);
echo leer_archivo("comentarios.txt");
} 
else{
echo leer_archivo("comentarios.txt");
}

?>
</tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
