<?php
include '../layout/header.php';
?>
    <main class="container">
        <h1>Condicionales</h1>

    <?php
        //capturamos dato enviado por el form
        $numero = $_POST['numero'];
        //comparamos el dato capturado
        if ( $numero > 100 ){
            echo '<img src="imgs/ok.png">';
        }
        else{
            echo '<img src="imgs/error.png">';
        }
    ?>
        <hr>
    <?php
        if( $numero > 100 ){
    ?>
            <img src="imgs/ok.png">
    <?php
        }
        else{
    ?>
            <img src="imgs/error.png">
    <?php
        }
    ?>
        <hr>
    <?php
        //default
        $img = 'error';
        if( $numero > 100 ){
            //sobreescritura
            $img = 'ok';
        }
    ?>
        <img src="imgs/<?php echo $img ?>.png">

    </main>
<?php
include '../layout/footer.html';