<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
$con = mysqli_connect("localhost", "root", "", "enterprise");
if (!$con) {
    die('No se estableció la conexión con el servidor:'.mysqli_error()); 
}
$sql="INSERT INTO clientes 
    VALUES('$_POST[idCliente]','$_POST[nombreCliente]','$_POST[dirección]','$_POST[teléfono]','$_POST[correoElectrónico]' )";
if (!mysqli_query($con, $sql, MYSQLI_USE_RESULT)){
    die ('Error:'.mysqli_error($con));
}
echo "<center>";
echo "1 registro agregado<br>";
echo "<a href='Consulta.php'>Ver registros</a>";
mysqli_close($con);
?>
</body>
</html>