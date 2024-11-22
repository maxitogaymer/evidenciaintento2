<?php
$con = mysqli_connect("localhost", "root", "", "enterprise");
echo "<br> <center>";
if (!$con) {
    die('No se estableció la conexión con el servidor:'.mysqli_error($con)); 
};
$sql="DELETE FROM clientes WHERE idCliente = '$_POST[idCliente]'";
if (!mysqli_query($con, $sql, MYSQLI_USE_RESULT)){
    die ('Error:'.mysqli_error($con));
};
echo "Registro borrado. <br> <br>";
echo "<a href='Borrar_Datos.html'>Regresar</a>";
mysqli_close($con)
?>