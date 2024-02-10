<?php

    function agregarUsuario() : bool
    {
        $usuNombre = $_POST['usuNombre'];
        $usuApellido = $_POST['usuApellido'];
        $usuEmail = $_POST['usuEmail'];
        $usuClave = $_POST['usuClave'];
        $claveHash = password_hash($usuClave, PASSWORD_DEFAULT);
        $link = conectar();
        $sql = "INSERT INTO usuarios
                   VALUE 
                     ( 
                         DEFAULT,
                        '".$usuNombre."',
                        '".$usuApellido."',
                        '".$usuEmail."',
                        '".$claveHash."',
                        3,
                        DEFAULT
                      )";
        try {
            return mysqli_query($link, $sql);
        }
        catch ( Exception $e ){
            echo $e->getMessage();
            return false;
        }
    }

    function modificarClave() : bool
    {
        //Capturamos clave actual sin encryptar
        $clave = $_POST['clave'];

        /* Obtenemos la clave encriptada */
        $link = conectar();
        $sql = "SELECT usuClave 
                    FROM usuarios
                    WHERE idUsuario = ".$_SESSION['idUsuario'];
        $resultado = mysqli_query($link, $sql);
        $usuario = mysqli_fetch_assoc($resultado);
        /* Verificamos que coincidan */
        if( !password_verify( $clave, $usuario['usuClave'] ) ){
            // si no coinciden  --> redirección
            header('location: formModificarClave.php?error=1');
            return false;
        }
        /* Si llegamos a este punto quiere decir
            que la contraseña enviada coincide */
        // Compramos que NO coincidan las contraseñas nuevas
        if( $_POST['newClave'] != $_POST['newClave2'] ){
            // si no coinciden  --> redirección
            header('location: formModificarClave.php?error=2');
            return false;
        }
        /*###
        En este punto sabemos que la clave actual es correcta
        y que la clave nueva y la clave repetida coinciden
        ###*/
        //Encryptamos la clave nueva
        $claveHash = password_hash( $_POST['newClave'], PASSWORD_DEFAULT );
        //Ahora si ya podemos hacer la modificación
        $sql = "UPDATE usuarios
                    SET usuClave = '".$claveHash."'
                  WHERE idUsuario = ".$_SESSION['idUsuario'];
        try {
            return mysqli_query($link, $sql);
        }
        catch ( Exception $e ){
            echo $e->getMessage();
            return false;
        }
    }