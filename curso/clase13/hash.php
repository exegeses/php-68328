<?php

    $clave = 'asdfg';
    echo $pw1 = password_hash( $clave, PASSWORD_DEFAULT );
    echo '<br>';
    echo $pw2 = password_hash( $clave, PASSWORD_DEFAULT );
    echo '<br>';
    echo $pw3 = password_hash( $clave, PASSWORD_DEFAULT );

    function check( $clave, $pHash )
    {
        if ( password_verify($clave, $pHash)) {
            echo 'coinciden <br>';
        }else{
            echo 'NO coinciden <br>';
        }
    }

    echo '<hr>';

    check( $clave, $pw1 );
    check( $clave, $pw2 );
    check( $clave, $pw3 );