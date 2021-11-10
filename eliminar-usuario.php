<?php

require '1.php';

$usuarioid = $_POST ['usuario-id'];

$eliminar = "DELETE FROM Usuario WHERE Usuarioold = '$usuarioid'";

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