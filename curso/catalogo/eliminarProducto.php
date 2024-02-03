<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $chequeo = eliminarProducto();
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Baja de un productos</h1>

<?php
    $css = 'danger';    
    $mensaje = 'No se pudo eliminar el producto';
    if( $chequeo ){
        $css = 'success';
        $mensaje = 'Producto eliminado correctamente';
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