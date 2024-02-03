<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    require 'funciones/marcas.php';
    require 'funciones/categorias.php';
    $search = busqueda();
    $marcas = listarMarcas();
    $categorias = listarCategorias();
    $productos = listarProductos();
    include 'layout/header.php';
    include 'layout/nav.php';
?>

    <main class="container py-4">
        <h1>Catálogo de productos</h1>

        <!-- BUSCADOR -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <div class="row g-3">
            <div class="col-sm-6">
                <input type="text" name="search" class="form-control" placeholder="Nombre de producto">
            </div>
            <div class="col-sm">
                <select name="idMarca" class="form-select">
                    <option value="">Todas las Marcas</option>
    <?php
                while( $marca = mysqli_fetch_assoc( $marcas ) ){
    ?>  
                    <option value="<?= $marca['idMarca'] ?>"><?= $marca['mkNombre'] ?></option>
    <?php
                }
    ?>                      
                </select>
            </div>
            <div class="col-sm">
                <select name="idCategoria" class="form-select">
                    <option value="">Todas las Categoría</option>
    <?php
            while( $categoria = mysqli_fetch_assoc( $categorias ) ){
    ?>
                    <option value="<?= $categoria['idCategoria'] ?>"><?= $categoria['catNombre'] ?></option>
    <?php
            }
    ?>
                </select>
            </div>
        </div>
        <div class="row g-3 mt-1">
            <input type="hidden" name="enviado" value="1">
            <button class="btn btn-dark">buscar</button>
        </div>
        </form>
        <!-- fin BUSCADOR -->

<?php
    if( isset($_GET['enviado']) ){
?>
        <div class="row g3 mt-4 shadow-sm">
            Busqueda realizada:
                <?= $search['search'] ?>
        </div>
<?php
    }

        if( mysqli_num_rows($productos) == 0 ){
?>
        <div class="row g3 mt-4 shadow-sm">
            No se encontraron resultados para su búsqueda
        </div>
<?php
        }
?>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4 py-5">

<?php
            while( $producto = mysqli_fetch_assoc( $productos ) ) { 
?>
            <article class="col d-flex align-items-start">
                <div class="m-1 producto">
                    <img src="productos/<?= $producto['prdImagen'] ?>">
                    <h2><?= $producto['prdNombre'] ?></h2>
                    <span class="precio">$<?= $producto['prdPrecio'] ?></span>
                    <p>
                        Marca: <?= $producto['mkNombre'] ?> <br>
                        Categoría: <?= $producto['catNombre'] ?> <br>
                    </p>
                </div>
            </article>
<?php
            }
?>
        </div>
        
    </main>

<?php
    include 'layout/footer.php';
?>