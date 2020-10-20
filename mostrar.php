<?php
include("conexion.php");
$con=conectar();

if(isset($_REQUEST['mostrar'])){
$query="select * from user ";
$cierto=mysql_query($query,$con);


if(!$cierto){
echo "No se ha podido Consultar";
}
else {
	echo"<!DOCTYPE html>
<html>
<head><title>Insertar Datos</title>
</head>
<body>";
echo "<strong>Datos encontrados</strong><br><br>";
echo "<table border='1'>";
echo"<tr>";
while($row=mysql_fetch_array($cierto)){
echo "<td>".$row['name']."</td>
<td>".$row['address']."</td>
<td>".$row['telephone']."</td>";
echo "</tr>";
}
echo "</table></body>
</html>";
}
}
echo "<a href='mostrar.html'>Regresar</a>";
?>