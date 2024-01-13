<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $chequeo = agregarProducto();
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Alta de un productos</h1>

<?php
    $css = 'danger';    
    $mensaje = 'No se pudo agregar el producto';
    if( $chequeo ){
        $css = 'success';
        $mensaje = 'Producto agregado correctamente';
?>        
        <div class="alert alert-<?= $css ?> col-6 mx-auto my-4">
            <?= $mensaje ?>
            <a href="adminProductos.php" class="btn btn-outline-secondary">
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