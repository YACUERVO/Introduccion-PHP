<?php include 'includes/header.php';

$carrito = ['tablet','television','computador'];

echo "<pre>";
var_dump($carrito);
echo "</pre>";

//para acceder al indice
//util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito[1]);
echo "</pre>";

//acceder a un elemento del array
echo $carrito[1];

//añade un elemento en el indice 3 del arreglo
$carrito[3] = 'nuevao producto...';

//añadir un elemneot nuevo al final
array_push($carrito, 'audifonos');

//añadir al inicio
array_unshift($carrito, 'smartwach');

$clientes = array('clientes1', 'clientes 2', 'clientes 3');
echo "<pre>";
var_dump($clientes);
echo "</pre>";



include 'includes/footer.php';