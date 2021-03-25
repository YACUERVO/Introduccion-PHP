<?php include 'includes/header.php';
$nombreCliente=" Yamith Cuervo ";


//conocer extencion de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);
 

//eliminar espacio en blanco
$texto= trim($nombreCliente);
echo strlen($texto);

//convertir a mayusculas
echo strtoupper($nombreCliente);


//convertir en minuscula
echo strtolower($nombreCliente);
echo"<br>";

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) ===strtolower($mail2));
echo str_replace('Yamith', 'J',$nombreCliente);
echo"<br>";

//revisar si un string existe o no
echo"<br>";
echo strpos($nombreCliente, 'Yamith');
$tipoCliente ="premium";
echo "el cliente".$nombreCliente."es" .$tipoCliente;
echo"<br>";
echo "el cliente {$nombreCliente} es {$tipoCliente}";

include 'includes/footer.php';