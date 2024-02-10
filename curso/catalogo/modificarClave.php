<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $chequeo = modificarClave();
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Modificación de contraseña</h1>

<?php
    if( $chequeo ){
?>        
        <div class="alert alert-success col-6 mx-auto my-4">
            Contraseña modificada correctamente
            <a href="adminUsuarios.php" class="btn btn-outline-secondary">
                volver a panel
            </a>
        </div>
<?php
    }else{
?>        
        <div class="alert alert-danger col-6 mx-auto my-4">
            No se pudo modificar la contraseña
            <a href="adminUsuarios.php" class="btn btn-outline-secondary">
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