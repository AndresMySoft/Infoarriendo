<html>
<head></head>
<body><table width="488" border="0">
  <tr>
    <td width="187" height="36"><a href="listar_deudores_usuarios.php">Atras</a></td>
    <td width="285"><div align="right"><a href="centro.php"><img src="imagenes/log-in.png" alt="Atras" width="48" height="48" border="0" /></a>
    <a href="centro.php">Inicio</a></div></td>
  </tr>
</table>




<?php
//agregamos la libreria de conexion
require 'conexion.php';
//recuperamos las varibles pasadas por el usuario
$opcion = $_POST["deudores"];


//llamamos la funcion conectar al servidor
conectar();
//creamos la consulta para el servidor

$query = "select empresa.nick as empresa,deudor.nombre_deu as nombre,empresa_deudor.cedula as cedula ,valor, 
                       fecha,empresa_deudor.ciudad as ciudad,tiempo_deuda 
                       from empresa_deudor
                       inner join empresa on empresa.nick=empresa_deudor.nick inner join deudor on   deudor.cedula = empresa_deudor.cedula order by $opcion";



//ejecutamos la consultra y verificamos si se realizo
//ejecutamos la consulta
$resultado = mysql_query($query);
while($row = mysql_fetch_array($resultado)){

echo "Empresa: ".$row['empresa']."<br>";
echo "Deudor: ".$row['nombre']."<br>";
echo "Cedula: ".$row['cedula']."<br>";
echo "Ciudad: ".$row['ciudad']."<br>";
echo "Valor: ".$row['valor']."<br>";
echo "Fecha: ".$row['fecha']."<br>";
echo "tiempo de deuda: ".$row['tiempo_deuda']."<br>";
echo "<hr>";

}

?>
<table width="489" border="0">
  <tr>
    <td width="187" height="36"><a href="listar_deudores_usuarios.php">Atras</a></td>
    <td width="286"><div align="right"><a href="centro.php"><img src="imagenes/log-in.png" alt="Atras" width="48" height="48" border="0" /></a>
    <a href="centro.php">Inicio</a></div></td>
  </tr>
</table>
</body>
</html>