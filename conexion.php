<?php
$servername = "localhost";
$database = "escuela_";
$username = "root";
$password = "password";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn){
    die("Coneccion fallida");
}
header("Location: menu.html");
mysqli_close($conn);
?>





