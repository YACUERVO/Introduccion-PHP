<?php include 'includes/header.php';

//while 

$i =0;//inicializador
//white revisa la condicion y ejecuta el codigo
while($i<10) {
echo $i."<br>";
$i++;//incremento
}

// do white. Primero ejecuta el codigo y luego revisa la ejecucion

$i=0;
do{
    echo $i."<br>";
    $i++;
} while($i<10);

//for loop
for($i=0;$i<10;$i++);{
    echo $i."<br>";
}

/**ejercicio 
- multiplpo de 3 imprimir FIZZ
- multiplo de 5 Buzz
- Multiplo de 3 y 5 FIZZ BUZZ
*/

// for($i = 1 ; $i < 50; $i++ ) {
//     if($i % 3 === 0 && $i % 5 === 0){
//     echo $i."-FIZZ BUZZ <br>";
//     }elseif($i % 3 === 0){
//     echo $i."-FIZZ <br>";
//     } elseif($i % 5 === 0 ){
//         echo $i."-BUZZ <br>";
//     }else {
//        echo $i. "<br>";
//     }

// }

$clientes = array('pedro', 'juan','karen');

foreach($clientes as $cliente){
    echo $cliente. '<br/>';
}

// echo count($cliente);
// echo sizeof($cliente);

for($i = 0; $i < count($clientes); $i++) {
    echo $clientes[$i]. '<br/>';
}

$clientes = array('pedro', 'juan','karen');

foreach($clientes as $cliente){
    echo $cliente. '<br/>';
}

// echo count($cliente);
// echo sizeof($cliente);

for($i = 0; $i < count($clientes); $i++):
    echo $clientes[$i]. '<br/>';
endfor;

$cliente = [
    'nombre'=>'juan',
    'saldo'=>200,
    'tipo'=>'premium'
];

foreach ($cliente as $key => $valor) {
    echo $key. " - " .$valor. '<br/>';
}

include 'includes/footer.php';