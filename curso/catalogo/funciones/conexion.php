<?php

    const SERVER    = 'localhost';
    const USUARIO   = 'root';
    const CLAVE     = 'root';
    const BASE      = 'catalogo68328';

    function conectar() : mysqli
    {
        $link = mysqli_connect(
            SERVER,
            USUARIO,
            CLAVE,
            BASE
        );
        // mysqli_set_charset($link, 'utf8');
        return $link;
    }
