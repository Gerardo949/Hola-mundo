<?php

require '1.php';

$dnialumno = $_POST ['alumno-dni'];

$eliminar = "DELETE FROM Alumno_1 WHERE DNI_alumno = '$dnialumno'";

$query = mysqli_query($conectar,$eliminar);

if($query){

    echo "<script> alert('Datos ELIMINADOS');
    location.href = '../app/menu.html';
    </script>";

}else{

    echo "<script> alert('Datos NO ELIMINADOS');
    location.href = '../app/menu.html';
    </script>";
}

?>