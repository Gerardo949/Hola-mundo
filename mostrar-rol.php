
<?php

$conexion = mysqli_connect('localhost','root','password','escuela_');

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
        <td>ROL-ID</td>
        <td>ROL-NOMBRE</td>
    </tr>
        <?php
            $sql = "SELECT * FROM Rol ";
            $result = mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)){
        ?>  
    <tr>
        <td><?php echo $mostrar['Rolld']?> </td>
        <td><?php echo $mostrar['RollNombre']?> </td>

    </tr>
<?php
    }
?> 
</table>    

</body>
</html>