<?php

    session_start();
    //eliminar vcariables de sesión
    unset($_SESSION['numero']);
    unset($_SESSION['cart']);

    session_unset();

    session_destroy();