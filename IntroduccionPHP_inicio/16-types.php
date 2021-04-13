<?php
declare(strict_types=1);
include 'includes/header.php';


function usuarioAutenticado(bool $autenticado) : void {//void no retonarna nada solo imprimi
   if($autenticado){
    echo "el usuario esta autenticado";
   }else{
    echo "no autenticado";
   }
   
    // return "el usuario esta autenticado";
}
$usuario = usuarioAutenticado(false);
echo $usuario;

include 'includes/footer.php';