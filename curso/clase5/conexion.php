<?php

    const SERVER = 'localhost';
    const USUARIO = 'root';
    const CLAVE = 'root';
    const BASE = 'catalogo68328';

    function conectar() : mysqli
    {
        //conexión a server ( también se selecciona la base )
        $link = mysqli_connect(
            SERVER,
            USUARIO,
            CLAVE,
            BASE
        );
        return $link;
    }