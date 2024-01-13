<?php
include '../layout/header.php';
?>
    <main class="container">
        <h1>Publicación de archivos</h1>
<?php
    //$archivo = $_POST['archivo'];
    $archivo = $_FILES['archivo'];
?>
<pre><?php print_r($archivo)  ?></pre>
<hr>
Nombre: <?= $_FILES['archivo']['name'] ?> <br>
Tipo: <?= $_FILES['archivo']['type'] ?>
<hr>
<?php
    // move_uploaded_file( origen, destino/nombre )
    $origen = $_FILES['archivo']['tmp_name'];
    $destino = 'productos/';
    $nombre = $_FILES['archivo']['name'];
    //pathinfo( archivo, part )
    $extension = pathinfo( $nombre, PATHINFO_EXTENSION );
    $nombreNuevo = time().'.'.$extension;
    echo $nombreNuevo;
    move_uploaded_file( $origen, $destino.$nombreNuevo );

?>

        
    </main>
<?php
include '../layout/footer.html';