<?php
//agregamos la libreria de conexion
require 'conexion.php';
//recuperamos las varibles pasadas por el usuario
$acepto = $_POST["acepto"];
$user = $_POST["usuario"];
$usuario = strtolower($user); //para convertir en minusculas el usuario
$pass = $_POST["pass"];
$pass2 = $_POST["pass2"];
$prop = $_POST["prop"];
$cedula = $_POST["cc"];
$nitrut = $_POST["nitrut"];
$dir = $_POST["dir"];
$tel = $_POST["telefono"];
$ciu = $_POST["ciudad"];
$ciudad = strtolower($ciu); //para convertir en minusculas el usuario
$tipo = $_POST["tipo"];
$correo = $_POST["correo"];

//llamamos la funcion conectar al servidor
conectar();
//creamos la consulta para el servidor
$query = "select * from propietario where cc_propietario = '$cedula' and  nombre_prop = '$prop'";
$exist = "select * from empresa where nick = '$usuario'";
$query1 = "insert into propietario(cc_propietario,nombre_prop) values ('$cedula','$prop')";
$query2 = "insert into empresa(nick,id,cc_propietario,pass,nit_rut,telefono,direccion,correo,ciudad) values ('$usuario',$tipo,'$cedula','$pass','$nitrut',$tel,'$dir','$correo','$ciudad')";

//ejecutamos la consultra y verificamos si se realizo

//ejecutamos la consulta
$resultado = mysql_query($query);
//contamos el numero de filas debueltas por  por la consulta
$filas = mysql_num_rows($resultado);

$resultado2 = mysql_query($exist);
//contamos el numero de filas debueltas por  por la consulta
$filas2 = mysql_num_rows($resultado2);


if($acepto){
  if($pass == $pass2){
//berificamos si la consulta concuerda con lagun propietario para no volver a registrarlo
if(!$filas){
  if(!mysql_query($query1)){
   
	 header("Location: registro.php?Error=si");
	 
  }
}  
if(!$filas2){
     if(!mysql_query($query2)){
           header("Location: registro.php?Error2=si");
       }
     else{

           header("Location: registro.php?registrado=si");
          }  
}
else{
header("Location: registro.php?Error3=si");

}

}
   else{
      header("Location: registro.php?Error5=si");
       }
}


else{
     header("Location: registro.php?Error4=si");
}




?>