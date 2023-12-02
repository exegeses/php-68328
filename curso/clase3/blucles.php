<?php
include '../layout/header.php';
?>
    <main class="container">
        <h1>Bucles en PHP</h1>


    <select name="dia">
<?php
    //for ( inicio; condicion; incremento )
    for ( $n = 1; $n <= 31; $n++ ){
    echo '<option value="',$n,'">',$n,'</option>';
    }
?>
    </select>
    <hr>

<?php
    $marcas = [
        'Samsung', 'iPhone', 'Xiaomi',
        'Huawei', 'Motorola', 'One plus',
        'Google phone'
    ];
    $cantidad = count($marcas);
    echo '<ul>';
    for ( $i = 0; $i < $cantidad; $i++ ){
        echo '<li>', $marcas[ $i ], '</li>';
    }
    echo '</ul>';
?>
<hr>
<?php
    //foreach ( $contenedor AS $auxiliar )
    foreach ( $marcas as $marca ){
        echo $marca, '<br>';
    }
?>
<hr>
<?php
    $autos = [
        'Volkswagen' => 'Gol',
        'Fiat' => 'Toro',
        'Peugeot'=>'208',
        'Renault' => 'Alaskan',
        'Chevrolet' => 'Cruze'
    ];
    // foreach ( $contenedor AS $key => $value )
    foreach ( $autos as $marca => $modelo ){
        echo $marca,': ', $modelo, '<br>';
    }
?>

    </main>
<?php
include '../layout/footer.html';