<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $chequeo = eliminarMarca( $_POST['idMarca'] );
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Baja de una marca</h1>

<?php
    if( $chequeo ){
?>        
        <div class="alert alert-success col-6 mx-auto my-4">
            Marca eliminada correctamente
            <a href="adminMarcas.php" class="btn btn-outline-secondary">
                volver a panel
            </a>
        </div>
<?php
    }else{
?>        
        <div class="alert alert-danger col-6 mx-auto my-4">
            No se pudo eliminar la marca
            <a href="adminMarcas.php" class="btn btn-outline-secondary">
                volver a panel
            </a>
        </div>
<?php
    }
?>


    </main>

<?php
    include 'layout/footer.php';
?>