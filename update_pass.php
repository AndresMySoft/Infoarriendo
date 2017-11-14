<?php session_start();?>
<html>
<head></head>
<body>
<a href="cambio_pass.php">Atras </a>
<?php
//agregamos la libreria de conexion
require 'conexion.php';
//recuperamos las varibles pasadas por el usuario
$pass = $_POST["pass"];
$pass2 = $_POST["pass2"];
$pass3 = $_POST["pass3"];
$nick = $_SESSION["nick"];
//llamamos la funcion conectar al servidor
conectar();

$query = "select * from empresa where nick = '$nick'  and pass = '$pass'";
//ejecutamos la consulta
$resultado = mysql_query($query);
//contamos el numero de filas debueltas por  por la consulta
//obtenemos los datos debueltos en un array
$row = mysql_fetch_assoc($resultado);

if($pass){
if($row["pass"] == $pass){
  if($pass2 == $pass3){

$query2 = "update empresa set pass = '$pass2' where pass = '$pass' and nick = '$nick'";
//verificamos si la consulta se ejecuta extisamente
   if(!mysql_query($query2)){
        header("Location: cambio_pass.php?Error=si");
        }
        else{
            header("Location: cambio_pass.php?modificado=si");
             }
     }
     else{
          header("Location: cambio_pass.php?Error2=si");
         }
} 
else{
    header("Location: cambio_pass.php?Error3=si");
}
 }
 else
 {
      header("Location: cambio_pass.php?Error3=si");
 }     

?>

<p><a href="dentro.php"><img src="imagenes/log-in.png" alt="Atras" width="48" height="48" border="0" /></a>
		      <a href="dentro.php">Servicios.</a></p>
</body>
</html>