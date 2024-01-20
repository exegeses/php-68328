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