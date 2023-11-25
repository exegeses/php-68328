<?php
include '../layout/header.php';
?>
    <main class="container">
        <h1>Casteo de variables</h1>
        <?php
            $nombre = 'marcos';
            // no castea la variable
            echo 'Tu nombre es: $nombre';
            echo '<br>';
            // SI castea la variable
            echo "Tu nombre es: $nombre";
            /*#### esto está MAL  ###*/

            echo '<br>';
            echo 'Tu nombre es: ', $nombre;
        ?>
    </main>
<?php
include '../layout/footer.html';