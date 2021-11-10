
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
        <td>USUARIO-ID</td>
        <td>USUARIO-ROL-ID</td>
        <td>USUARIO-NICKNAME</td>
        <td>USUARIO-PASSWORD</td>

    </tr>
        <?php
            $sql = "SELECT * FROM Usuario ";
            $result = mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)){
        ?>  
    <tr>
        <td><?php echo $mostrar['Usuarioold']?> </td>
        <td><?php echo $mostrar['UsuarioRolld']?> </td>
        <td><?php echo $mostrar['UsuarioNickName']?> </td>
        <td><?php echo $mostrar['UsuarioPasswd']?> </td>

    </tr>
<?php
    }
?> 
</table>    

</body>
</html>