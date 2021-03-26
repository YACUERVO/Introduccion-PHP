<?php include 'includes/header.php';

$auntenticado = true;
$admin = false;

if($auntenticado || $admin){
    echo "usuario auntenticao correctamente";
}else {
    echo "usuario no autenticado, incia seccion";
}
//If anidados...

$cliente = [
    'nombre'=> 'yamith',
    'saldo'=>200,
    'informacion'=>[
        'tipo'=>'premium'
    ]
    ];
echo "<pre>";
if(!empty($cliente)){
    //echo "el arreglo de cliente esta vacio";
    echo "el arreglo de cliente no esa vacio";

    if($cliente['saldo']>0){
        echo " el cliente tiene saldo disponible";       
}else{
    echo "no hay saldo";
}   

}
echo "</pre>";

//else if
echo "<pre>";
if($cliente['saldo']>0){
    //si el no tiene saldo entonces el cliente es premium
    echo "el cliente tiene saldo";
}else if ($cliente['informacion']['tipo']==='premium'){
    echo "el cliente es premium";
}else{
    echo "no hay cliente definido o no tiene saldo o no es premium";
}
echo "</pre>";

//swith
echo "<pre>";
$tecnologias = 'javaScript';

switch($tecnologias){
    case 'PHP':
        echo "PHP, un exelente lenguaje";
        break;
    case 'javaScript':
        echo "Genial, el lenjuage de la web";
        break;
        case 'HTML':
            echo "MMMM";
            break;
    default:
        echo "algun lenguaje que no se cual es";
        break;
}

include 'includes/footer.php';