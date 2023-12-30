<?php
    /**
     * CRUD de marcas
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

    function verMarcaPorID( string $idMarca ) : array
    {
        $link = conectar();
        $sql = "SELECT * 
                  FROM marcas
                  WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query( $link, $sql );
        $marca = mysqli_fetch_assoc( $resultado );
        return $marca;
    }

    function agregarMarca( string $mkNombre ) : bool
    {
        $link = conectar();
        $sql = "INSERT INTO marcas
                        ( mkNombre )
                    VALUE 
                        ( '".$mkNombre."' )";
        try {
            $resultado = mysqli_query( $link, $sql );
            return $resultado; // true
        }
        catch ( Exception $e ){
            // log de errores
            echo $e->getMessage();
            return false;
        }
    }

    function modificarMarca() : bool
    {
        $mkNombre = $_POST['mkNombre'];
        $idMarca = $_POST['idMarca'];
        $link = conectar();
        $sql = "UPDATE marcas
                    SET mkNombre = '".$mkNombre."'
                  WHERE idMarca = ".$idMarca;
        try {
            $resultado = mysqli_query( $link, $sql );
            return $resultado;
        }
        catch ( Exception $e ){
            //log de errores y excepciones
            echo $e->getMessage();
            return false;
        }
    }

    /**
     * Función para verificar si existen productos
     * asociados a una marca
     * @param string $idMarca
     * @return bool
     */
    function verificarProductoPorMarca( string $idMarca ) : bool
    {

    }