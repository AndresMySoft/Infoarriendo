<html>
<head></head>
<body>
<a href="modificacion_perfil.php">Atras </a>
<?php
//agregamos la libreria de conexion
require 'conexion.php';
//recuperamos las varibles pasadas por el usuario
$prop = $_POST["prop"];
$propietario = strtolower($prop); //para convertir en minusculas el usuario
$identificacion = $_POST["identificacion"];
$ciu = $_POST["ciudad"];
$ciudad = strtolower($ciu); //para convertir en minusculas el usuario
$telefono = $_POST["telefono"];
$celular = $_POST["celular"];
$correo = $_POST["correo"];

$ciudad_empre = $_POST["ciudad_empresa"];
$telefono_empre = $_POST["telefono_empresa"];
$direccion = $_POST["direccion"];
$correo_empre = $_POST["correo_empresa"];

session_start();
$nick = $_SESSION["nick"];
$cedula = $_SESSION["cedula_prop"];

//llamamos la funcion conectar al servidor
conectar();
//creamos la consulta para el servidor
$query = "update propietario set cc_propietario = '$identificacion',nombre_prop = '$prop',telefono_prop = '$telefono',movil_prop = '$celular',correo_prop = '$correo',ciudad_prop = '$ciudad' where cc_propietario = '$cedula'";
$query2 = "update empresa set cc_propietario = '$identificacion',telefono = '$telefono_empre',direccion = '$direccion',correo = '$correo_empre',ciudad = '$ciudad_empre' where cc_propietario = '$cedula' and nick = '$nick'";
//
$consulta = "select * from empresa where cc_propietario = '$cedula'";
$query3 = "delete from propietario where cc_propietario = '$cedula'";

$query4 = "insert into propietario(cc_propietario,nombre_prop,telefono_prop,movil_prop,correo_prop,ciudad_prop) values ('$identificacion','$prop','$telefono','$celular','$correo','$ciudad')";
//verificamos si la consulta se ejecuta extisamente

$resultado = mysql_query($consulta);
 //contamos el numero de filas debueltas por  por la consulta
$filas = mysql_num_rows($resultado);
if($filas >= 2){
  mysql_query($query4);
}

else{   
if(!mysql_query($query)){
  // echo "La modificacion de los datos no se realizo ya Existe Alguien con esta Cedula";
   }
 }
    
 if(!mysql_query($query2)){
   
     echo "La modificacion de los datos no se realizo Error".mysql_error();
   }
   else{
    echo "la modificacion de los datos se realizo correctamente";
	
	
	     $resultado = mysql_query($consulta);
          //contamos el numero de filas debueltas por  por la consulta
           $filas = mysql_num_rows($resultado);
           if(!$filas){
              mysql_query($query3);
                   }
   
   }
   


   

?>

<p><a href="dentro.php"><img src="imagenes/log-in.png" alt="Atras" width="48" height="48" border="0" /></a>
		      <a href="dentro.php">Servicios.</a></p>
</body>
</html>