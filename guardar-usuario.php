<?php

require '1.php';


$usuarioid = $_POST ['usuario-id'];
$rolid = $_POST ['usuario-rol-id'];
$nickname = $_POST ['usuario-nickname'];
$password = $_POST ['usuario-password'];


$insertar = "INSERT INTO Usuario_1 VALUES ('$usuarioid','$rolid','$nickname','$password')";

$query = mysqli_query($conectar,$insertar);

if($query){

    echo "<script> alert('Datos CORRECTOS');
    location.href = '../app/menu.html';
    </script>";

}else{

    echo "<script> alert('Datos INCORRECTOS O REPETIDOS');
    location.href = '../app/menu.html';
    </script>";
}

?>