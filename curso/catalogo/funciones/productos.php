<?php

    /**
    * CRUD de productos
    */
    function listarProductos() : mysqli_result
    {
        $link = conectar();
        $sql = "SELECT *, mkNombre, catNombre 
                  FROM productos
                  JOIN marcas
                      ON productos.idMarca = marcas.idMarca
                  JOIN categorias
                      ON productos.idCategoria = categorias.idCategoria
                  ORDER BY idProducto";
        $resultado = mysqli_query( $link, $sql );
        return $resultado;
    }