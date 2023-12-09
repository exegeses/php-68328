<?php

    //declaración
    function negrita( string $frase ) : string
    {
        $mensaje = '<b>'.$frase.'</b><br>';
        return $mensaje;
    }
    function sumar( float $n1, float $n2 ) : float
    {
        $resultado = $n1 + $n2;
        return $resultado;
    }
    function cuadrado( float $numero ) : float
    {
        return $numero * $numero;
    }
    function esPar( int $numero ) : bool
    {
     // return ( $numero % 2 == 0 )?'es par':'No es par';
        if( $numero % 2 == 0 ){
            //return 'es par';
            return true;
        }
        //return 'NO es par';
        return false;
    }

    include '../layout/header.php';
?>
    <main class="container">
        <h1>Funciones</h1>
<?php
    //invocamos funciones
    echo negrita('Hola Mundo');
    echo negrita('Php y MySQL');
    echo negrita('reutilización');
?>
<hr>
<?php
    echo sumar( 3.1416, 7 );
?>
<hr>
<?php
    echo negrita( sumar( 6, 4 ) );
?>
<hr>
<?= cuadrado(6); ?>
<hr>
<?= esPar(8); ?>

    </main>
<?php
include '../layout/footer.html';