<?php

require '1.php';


$ROL = $_POST ['rol'];
$ROLID = $_POST ['id'];

$insertar = "INSERT INTO Rol VALUES ('$ROLID','$ROL')";

$query = mysqli_query($conectar,$insertar);

if($query){

    echo "<script> alert('Datos CORRECTOS');
    location.href = '../pp/menu.html';
    </script>";

}else{

    echo "<script> alert('Datos INCORRECTOS O REPETIDOS');
    location.href = '../app/menu.html';
    </script>";
}

?>