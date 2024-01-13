<?php
include '../layout/header.php';
?>
    <main class="container">
        <h1>Publicación de archivos</h1>
        <form action="subir-archivo.php" method="post" enctype="multipart/form-data">

            <input type="file" name="archivo" class="form-control">
            <br>
            <button class="btn btn-dark">publicar</button>

        </form>
    </main>
<?php
include '../layout/footer.html';