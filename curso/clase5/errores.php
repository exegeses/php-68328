<?php

    $n = 32;

    try {
        //intantamos hacer esto
        $resultado = $n / 0;
    }catch( Error $e  ){
        // si fallara, hacemos esto otro
        echo 'mensaje: ', $e->getMessage(), '<br>';
        echo 'archivo: ', $e->getFile(), '<br>';
        echo 'línea: ', $e->getLine(), '<br>';
        //despuçes del log, redirección o mensaje personalizado
    }
