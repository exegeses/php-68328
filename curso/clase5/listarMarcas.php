<?php
/*  conexión a server ( también se selecciona la base )
    creación de mensaje SQL
    ejecución de mensaje SQL
    reporte (mensaje en pantalla)
*/
//conexión a server ( también se selecciona la base )
    $link = mysqli_connect(
        'localhost',
        'root',
        'root',
        'catalogo68328'
    );

//creación de mensaje SQL
    $sql = "SELECT * FROM marcas";

//ejecución de mensaje SQL
    $marcas = mysqli_query( $link, $sql );

include '../layout/header.php';
?>
    <main class="container">
        <h1>Listado de marcas</h1>

        <ul class="col-6 mx-auto">
        <?php
            while( $marca = mysqli_fetch_assoc( $marcas ) ){
        ?>
                <li>
                    <?= $marca['idMarca'] ?>
                    <?= $marca['mkNombre'] ?>
                </li>
        <?php
            }
        ?>
        </ul>

    </main>
<?php
include '../layout/footer.html';