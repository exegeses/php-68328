<?php
    /**
     * CRUD de marcas
     * verMarcaPorID()
     * agregarMarca()
     * modificarMarca()
     * eliminarMarca()
     */

    function listarMarcas() : mysqli_result
    {
        $link = conectar();
        $sql = "SELECT * 
                  FROM marcas
                  ORDER BY idMarca";
        $resultado = mysqli_query( $link, $sql );
        return $resultado;
    }