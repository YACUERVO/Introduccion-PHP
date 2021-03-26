<?php include 'includes/header.php';

// in_array - buscar elementos en un arreglo

$carrito = ['tablet','caomputador','televicion'];
var_dump(in_array('tablet',$carrito));
var_dump(in_array('audifonos',$carrito));

//ordenar elemntos de un arreglo


$numero = array(1,3,4,8,9,6,4,5);
sort($numero);// de menor a mayor
rsort($numero);//de mayor a menor
echo "<pre>";
var_dump($numero);
echo "</pre>";

//ordenar arrglo asociativo. Ordena por numero luego por strings por orden alfabetico
$cliente = array(
    'saldo' => 200,
    'tipo'=>'premium',
    'nombre'=>'juan'
);
echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente);//ordena por valores (orden alfabetico)
arsort($cliente);//ordena por valores (orden alfabetico) primero las letras y luego los numeros
ksort($cliente);//ordena por llaves (orden alfabetico)
krsort($cliente);//ordena por llaves (orden alfabetica) de la Z a la A

echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';