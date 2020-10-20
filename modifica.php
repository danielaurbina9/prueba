<?php
include('Conexion.php');
$con=conectar();
if(isset($_REQUEST['buscar'])){
$name=$_REQUEST['name'];
$query="select corporative from user where name='$name'";
$cierto=mysql_query($query,$con;

if(!$cierto){
echo "No existe!";
echo "<a href='modifica.html'>Regresar</a>";
}else
{
if($row=mysql_fetch_array($cierto)){
echo "<form action='modificardatosfinal.php' method='post'>
<input type='text' name='name' value='$row[name]'>
<input type='text' name='address' value='$row[user]'>
<input type='text' name='telephone' value='$row[pwd]'>
<input type='submit' name='Modificar' value='Modificar'>
</form>";
echo "<a href='modifica.html'>Regresar</a>";
}
else{
echo "No existe!";
echo "<a href='modifica.html'>Regresar</a>";
}
}
}
?>