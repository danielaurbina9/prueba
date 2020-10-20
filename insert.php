<?php
require ("conexion.php");
 $status = "";
$con=conectar();
$codigo=$_REQUEST['name'];
$descripcion=$_REQUEST['address'];
$precio=$_REQUEST['telephone'];

$query="insert into corporative values ('$name','$address','$telephone')";

$cierto=mysql_query($query,$con);//insertar


if(!$cierto){
echo "No se ha podido guardar";
}
else {
echo "Datos Guardados Correctamente<br>";
echo "<a href='new.html'>Regresar</a>";
}
?>