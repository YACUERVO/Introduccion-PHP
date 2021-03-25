<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'juan',
    'saldo'  => 200,
    'informacion' => [
        'tipo' => 'premiun'
    ]
    ];
echo "<pre>";
var_dump($cliente['nombre']);
echo "</pre>";

echo $cliente['nombre'];
echo "<pre>";
echo $cliente['saldo'];
echo "</pre>";
echo "<pre>";
echo $cliente['informacion']['tipo'];
echo "</pre>";

$cliente['codigo'] = 223456;
echo "<pre>";
var_dump($cliente) ;
echo "</pre>";


include 'includes/footer.php';