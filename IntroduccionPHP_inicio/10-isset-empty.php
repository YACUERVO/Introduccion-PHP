<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('pedro','juan','karen');
$cliente=[
    'nombre'=>'yamith',
    'saldo'=>200
];

//Empty para verificar que un arreglo esta vacio

var_dump(empty($clientes));
var_dump(empty($clientes3));

//Isset - Revisar si un arreglo esta creado o una propiedad esta definida
echo "<br>";
var_dump(isset($clientes3));

////Isset - permitar si una propiedad de un arreglo asociativo existe
echo "<br>";
var_dump(isset($cliente['nombre']));

echo "<br>";
var_dump(isset($cliente['codigo']));

include 'includes/footer.php';