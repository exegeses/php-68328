<?php
include '../layout/header.php';
?>
    <main class="container">
        <h1>Ver datos enviados por el form</h1>
        <?php
            //capturamos dato enviado
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            //imprimimos datos enviador por el form
            echo 'Tu nombre es: ', $nombre;
            echo '<br>';
            echo 'Tu email es: ', $email;
        ?>
    </main>
<?php
include '../layout/footer.html';