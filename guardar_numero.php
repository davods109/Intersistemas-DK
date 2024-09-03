<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "intersistemas";

$coneccion = mysqli_connect ($servidor, $usuario, $clave, $bd )


                   
?>

<form method="post">

<input class="form-control" type= "number" name="numero" placeholder="Numero o Cuenta" autocomplete="off">
<br>
<input class="btn btn-primary py-3 px-5" type= "submit" name="enviar">

</form>

<?php

date_default_timezone_set("America/Bogota");
$fecha = date("Y/m/d");
$hora = date("H:i");



if(isset($_POST['enviar'])){

 $nombre = $_POST['numero'];

 $numero = $_POST['numero'];

if(strlen($_POST['numero']) > 11){
  echo "El número debe tener como máximo 11 dígitos.";
  }else{

  }

if(strlen($_POST['numero']) < 4){
   echo "El número debe tener como minimo 4 dígitos.";
  }else{

$consulta = "SELECT * FROM registros WHERE numero = '$numero';";
    
$resultado = mysqli_query($coneccion, $consulta);
    
if(mysqli_num_rows($resultado) > 0){

   $registro = mysqli_fetch_assoc($resultado);

   $fecha = $registro['fecha'];
   $hora = $registro['hora'];

   echo "El numero $numero ya realizo transaccion.";

   echo " (Fecha: $fecha, Hora: $hora)";

   }else{
    
  $insertar = "INSERT INTO registros Values ('$nombre','$fecha','$hora','')";

  $coneccion = mysqli_query($coneccion,$insertar);

  echo "Registro Exitoso.";

 }
}
}

?>