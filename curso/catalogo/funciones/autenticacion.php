<?php

    function login()
    {
        $usuEmail = $_POST['usuEmail'];
        $usuClave = $_POST['usuClave'];
        $link = conectar();
        $sql = "SELECT idUsuario, usuNombre, usuApellido,
                       idRol, usuClave
                    FROM usuarios
                  WHERE usuEmail = '".$usuEmail."'
                    AND usuActivo = 1";
        $resultado = mysqli_query( $link, $sql );
        $arrayUsuario = mysqli_fetch_assoc( $resultado );
        $cantidad = mysqli_num_rows( $resultado );
        /*
         * si cantidad == 0  --> se logueó mal (o no está activo)
         * si cantidad == 1  --> se logue´´o bien
         * */
        if( $cantidad == 0 ){
            //redirección a formLogin.php enviando error = 1
            header('location: formLogin.php?error=1');
            return;
        }
        else{
            /*
             * En este punto sabemos que el e-mail está correcto
             * Y que el usuario está activo
             * Aún nos falta chequear la contraseña
             * */
            if( !password_verify($usuClave, $arrayUsuario['usuClave']) ){
                ###### la contraseña está mal
                //redirección a formLogin.php enviando error = 1
                header('location: formLogin.php?error=1');
                return;
            }
        }

        /*
         * En este punto ya sabemos que el usuario se logueó bien
         * y además que está activo
         *  */
        ############## RUTINA DE AUTENTICACIÓN ###################
        $_SESSION['login'] = 1;
        //registramos datos de usuario en sesión
        $_SESSION['idUsuario'] = $arrayUsuario['idUsuario'];
        $_SESSION['usuNombre'] = $arrayUsuario['usuNombre'];
        $_SESSION['usuApellido'] = $arrayUsuario['usuApellido'];
        $_SESSION['idRol'] = $arrayUsuario['idRol'];
        $_SESSION['usuEmail'] = $usuEmail;
        //redirección a admin.php
        header('location: admin.php');
    }

    function logout() : void
    {
        //eliminamos variables de sesión
        session_unset();
        //eliminamos la sesión
        session_destroy();
        #### opcional
        // redirección con demora
        header('refresh:3;url=index.php');
    }

    function autenticar() : void
    {
        if( !isset($_SESSION['login']) ){
            header('location: formLogin.php?error=2');
        }
    }

    function noAdmin() : void
    {
        if( $_SESSION['idRol'] != 1 ){
            header('location: no-admin.php');
        }
    }