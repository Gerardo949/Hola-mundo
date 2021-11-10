<?php

require '1.php';


$dnialumno = $_POST ['dni-alumno'];
$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$direccion = $_POST ['direccion'];
$poblacion = $_POST ['poblacion'];
$fecha = $_POST ['fecha'];
$cp = $_POST ['cp'];
$telefono = $_POST ['telefono'];
$dni = $_POST ['rfc'];


$insertar = "INSERT INTO Alumno_1 VALUES ('$dnialumno','$nombre','$apellido','$direccion','$poblacion','$fecha','$cp','$telefono','$rfc')";

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