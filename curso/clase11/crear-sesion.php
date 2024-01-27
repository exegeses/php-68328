<?php

    //directiva de sesión
    session_start();

    //registramos variables de sesi´´on
    $_SESSION['nombre'] = 'marcos pinardi';
    $_SESSION['numero'] = 666;
    $_SESSION['cart'] = [ 333=>3, 763=>1, 999=>1 ];