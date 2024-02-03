<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        logout();
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Salir de sistema</h1>

        <p>
            Gracias por su visita
        </p>
    </main>

<?php
    include 'layout/footer.php';
?>