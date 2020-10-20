<?php
include('Conexion.php');
$con=conectar();
if(isset($_REQUEST['Modificar'])){

$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$telephone=$_REQUEST['telephone'];


$queryi="UPDATE user SET user='$user',address='$address' where name='$name'";//consulta sql

$val=mysql_query($queryi,$con);//ejecutando consulta

if(!$val){
echo "No se ha podido Modificar";
echo "<a href='modifica.html'>Regresar</a>";
}
else {
echo "Datos Modificados Correctamente<br><br>";
echo "<a href='modifica.html'>Regresar</a>";
}
}
?>