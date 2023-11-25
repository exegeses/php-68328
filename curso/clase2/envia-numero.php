<?php
include '../layout/header.php';
?>
    <main class="container">
        <h1>Condicionales</h1>

        <form action="procesa-numero.php" method="post">
            <input type="number" name="numero">
            <br>
            <button class="btn btn-dark">enviar</button>
        </form>

    </main>
<?php
include '../layout/footer.html';