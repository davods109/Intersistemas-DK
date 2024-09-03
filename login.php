<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "intersistemas";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn)
{

    die("No hay conexión: ".mysqli_connect_error());
    
}

$nombre = $_POST["usuario"];
$pass = $_POST["contraseña"];

$query = mysqli_query($conn, "SELECT * FROM login WHERE usuario = '".$nombre."' and contraseña = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{

     header("Location: privada.php");
   
}
else if ($nr == 0)
{
    header("Location: login_error.html");
}
?>