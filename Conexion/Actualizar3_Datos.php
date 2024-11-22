<?php
$con = mysqli_connect("localhost", "root", "", "enterprise");
if (!$con) {
    die('No se estableció la conexión con el servidor:'.mysqli_error($con)); 
};
$ID=$_POST['idCliente'];
$Nombre = $_POST['nombreCliente'];
$Direccion = $_POST['dirección'];
$Telefono = $_POST['teléfono'];
$Correo = $_POST['correoElectrónico'];

mysqli_query($con, "UPDATE clientes 
            SET idCliente='$ID',nombreCliente= '$Nombre',dirección= '$Direccion',teléfono= '$Telefono',correoElectrónico= '$Correo' 
            WHERE idCliente = '$ID'");
header("Location:Actualizar_Datos.php");
mysqli_close($con);
?>