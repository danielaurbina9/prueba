<?php
require ("conexion.php");
 $status = "";
$con=conectar();
$name=$_REQUEST['name'];
$user=$_REQUEST['address'];
$pwd=$_REQUEST['telephone'];

$query="insert into user values ('$name','$address','$telephone')";

$cierto=mysql_query($query,$con);//insertar


if(!$cierto){
echo "No se ha podido guardar";
}
else {
echo "Datos Guardados Correctamente<br>";
echo "<a href='new.html'>Regresar</a>";
}
?>