
<?php

$conexion = mysqli_connect('localhost','root','password','Escuela_');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
<table border=".5">
    <tr>
        <td>DNI-ALUMNO</td>
        <td>NOMBRE</td>
        <td>APELLIDO</td>
        <td>DIRECCION</td>
        <td>POBLACION</td>
        <td>FECHA DE NACIMIENTO</td>
        <td>CODIGO POSTAL</td>
        <td>TELEFONO</td>
        <td>RFC</td>

    </tr>
        <?php
            $sql = "SELECT * FROM Alumno_1";
            $result = mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)){
        ?>  
    <tr>
        <td><?php echo $mostrar['DNI_alumno']?> </td>
        <td><?php echo $mostrar['Nombre']?> </td>
        <td><?php echo $mostrar['Apellido']?> </td>
        <td><?php echo $mostrar['Direccion']?> </td>
        <td><?php echo $mostrar['Poblacion']?> </td>
        <td><?php echo $mostrar['f_nacimiento']?> </td> 
        <td><?php echo $mostrar['Codigo_postal']?> </td> 
        <td><?php echo $mostrar['Telefono']?> </td> 
        <td><?php echo $mostrar['RCF']?> </td>
        </tr>
<?php
    }
?> 


</table>    

</body>
</html>