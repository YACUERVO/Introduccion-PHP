<?php include 'includes/header.php';
$productos = [
    [
        'nombre' =>'tablet', 
        'precio' =>200,
        'disponible'=> true

    ],
    [
        'nombre' =>'televicion 24"', 
        'precio' =>400,
        'disponible'=> true

    ],
    [
        'nombre' =>'monitor curvo', 
        'precio' =>300,
        'disponible'=> false

    ]
];

foreach ($productos as $producto){ ?>

<li>
    <p>Producto: <?php echo $producto['nombre']; ?> </p>
    <p>Precio: <?php echo "$" . $producto['precio']; ?> </p>
    <p><?php echo ($producto['disponible']) ? 'Disponible' : 'No disponible' ; ?></p>

    <!-- <?php
        // if($producto['disponible']){
            // echo "<p>Disponible</p>";
        // }else {
            // echo "<p>No Disponible</p>";
        // }
    ?> -->
</li>
<?php



   
}


include 'includes/footer.php';