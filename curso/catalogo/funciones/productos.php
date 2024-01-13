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

    function subirArchivo() : string
    {
        // si no enviaron archivo (predeterminado)
        $prdImagen = 'noDisponible.png';

        // si enviaron archivo y no hay errores
        if( $_FILES['prdImagen']['error'] == 0 ) {
            $origen = $_FILES['prdImagen']['tmp_name'];
            $destino = 'productos/';
            $nombre = $_FILES['prdImagen']['name'];
            # renombramos archivo
            //pathinfo( archivo, part )
            $extension = pathinfo($nombre, PATHINFO_EXTENSION);
            $prdImagen = time() . '.' . $extension;
            # subimos archivo a carpeta productos
            move_uploaded_file($origen, $destino . $prdImagen);
        }
        return $prdImagen;
    }

    function agregarProducto() : bool
    {
        $link = conectar();
        //capturamos datos enviados por el form
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdDescripcion = $_POST['prdDescripcion'];
        $prdImagen = subirArchivo();
        $prdActivo = 1;

        $sql = "INSERT INTO productos
                    VALUE
                        (
                            DEFAULT,
                            '".$prdNombre."',
                            ".$prdPrecio.",
                            ".$idMarca.",
                            ".$idCategoria.",
                            '".$prdDescripcion."',
                            '".$prdImagen."',
                            ".$prdActivo."
                        )
                    ";
        try {
            return mysqli_query( $link, $sql );
        }catch (Exception $e){
            echo $e->getMessage();
            return false;
        }
    }