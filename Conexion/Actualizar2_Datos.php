<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css.css">
    <meta charset="utf-8" />
    <style type="text/css"></style>
</head>
<body>
    
<?php
$con = mysqli_connect("localhost", "root", "", "enterprise");
$Clientes = $_POST['id'];
$resultado = mysqli_query($con, "SELECT * FROM clientes where idCliente = $Clientes"); 
if ($resultado === FALSE) {
echo "Fallo";
die(mysqli_error());
}
echo"<center>";
echo "<form action='Actualizar3_Datos.php' method='POST'>";
echo "<h1>Editar Datos</h1>";
echo "<table border='1'>";
while($row = mysqli_fetch_array($resultado)){
    echo "<tr>";
    echo "<td>ID Cliente:</td>"; echo "<td><input type='text' name='idCliente' value=".$row['idCliente']."></td></tr>";
    echo "<tr>";
    echo "<td>Nombre:</td>"; echo "<td><input type='text' name='nombreCliente' value=".$row['nombreCliente']."></td></tr>";
    echo "<tr>";
    echo "<td>Dirección:</td>"; echo "<td><input type='text' name='dirección' value=".$row['dirección']."></td></tr>"; 
    echo "<tr>";
    echo "<td>Teléfono:</td>"; echo "<td><input type='text' name='teléfono' value=".$row['teléfono']."></td></tr>";
    echo "<tr>";
    echo "<td>Correo Electrónico:</td>"; echo "<td><input type='text' name='correoElectrónico' value=".$row['correoElectrónico']."></td></tr>";
};
echo "</table>";
mysqli_close($con);
echo "<input type='submit' value='actualizar_datos'>";
echo "</form";
?>
</body>
</html>
