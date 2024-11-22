<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
        <center>
            <?php
            $con = mysqli_connect("localhost", "root", "", "enterprise");
            $resultado = mysqli_query($con, "select * from clientes");
            if($resultado === FALSE){
                echo  "fallo";
                die(mysqli_error());
            }
            echo "<center><font face='Arial'>";
            echo "<a href='Consulta.php'>Actualizar Tabla</a>";
            echo "<h1>Consulta de la tabla Clientes</h1>";
            echo "<table border='1'>
            <tr>
            <th>ID Cliente</th>
            <th>Nombre Cliente</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo Electrónico</th></tr>";
            while($row=mysqli_fetch_array($resultado)){
                echo "<tr>";
                echo "<td align=center >".$row['idCliente']."</td>";
                echo "<td>".$row['nombreCliente']."</td>";
                echo "<td>".$row['dirección']."</td>";
                echo "<td>".$row['teléfono']."</td>";
                echo "<td align=center>".$row['correoElectrónico']."</td>";
                echo "</tr>";
            };
            echo"</table>";
            $registros=mysqli_num_rows($resultado);
            echo "<br>registros: ".$registros;
            mysqli_close($con);
            ?>
        </center>   
</body>
</html>