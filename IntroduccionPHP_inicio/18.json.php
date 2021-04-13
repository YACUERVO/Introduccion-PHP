<?php include 'includes/header.php';

$productos = [
    [
        'nombre' =>'tablet', 
        'precio' =>200,
        'disponible'=> true

    ],
    [
        'nombre' =>'televición 24"', 
        'precio' =>400,
        'disponible'=> true

    ],
    [
        'nombre' =>'monitor curvo', 
        'precio' =>300,
        'disponible'=> false

    ]
];

echo "<pre>";
var_dump($productos);
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);//Para que tenga en cuenta los acentos. Json_encode lo convierte en un string
$json_array = json_decode($json);//json_decode. convierte a un arreglo
var_dump($json);
var_dump($json_array);
echo "</pre>";





include 'includes/footer.php';