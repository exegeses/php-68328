<?php
include '../layout/header.php';
?>
    <main class="container">
        <h1>Arrays en PHP</h1>
<?php
    $marcas = [
                'Samsung', 'iPhone', 'Xiaomi',
                'Huawei', 'Motorola', 'One plus',
                'Google phone'
              ];
    echo $marcas[2];
?>
<pre>
<?php
    print_r($marcas);
?>
</pre>
        <hr>
<?php
    $marcas = [
        7 =>'Samsung',
            'iPhone',
        11 => 'Xiaomi',
        'Huawei', 'Motorola', 'One plus',
        'Google phone'
    ];
?>
<pre>
<?php
print_r($marcas);
?>
</pre>
<hr>
<?php
    $autos = [
        'Volkswagen' => 'Gol',
        'Fiat'=> 'Toro',
        'Peugeot'=>'208',
        'Renault' => 'Alaskan',
        'Chevrolet' => 'Cruze'
    ];
    echo $autos['Renault'];
?>
<pre>
<?php
    //var_dump($autos);
    print_r($autos);
?>
</pre>
    </main>
<?php
include '../layout/footer.html';