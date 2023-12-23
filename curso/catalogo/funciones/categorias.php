<?php

    /**
    * CRUD de categorías
    */
    function listarCategorias() : mysqli_result
    {
        $link = conectar();
        $sql = "SELECT * 
                  FROM categorias
                  ORDER BY idCategoria";
        $resultado = mysqli_query( $link, $sql );
        return $resultado;
    }