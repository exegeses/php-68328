<?php

#####################
#### CRUD de marcas
#####################

function listarMarcas() : mysqli_result
{
    //conexión a server ( también se selecciona la base )
    $link = conectar();

    //creación de mensaje SQL
    $sql = "SELECT * FROM marcas";

    //ejecución de mensaje SQL
    $marcas = mysqli_query( $link, $sql );

    return $marcas;
}

/*
 * listarMarcas()
 * verMarcaPorId()
 * agregarMarca()
 * modificarMarca()
 * eliminarMarca()
 * */