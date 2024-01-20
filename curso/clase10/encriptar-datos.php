<?php
include '../layout/header.php';
?>
    <main class="container">
        <h1>Encryptar datos</h1>
<?php
    $clave = 'asdfg';
    //BCrypt2
    $claveHash = password_hash( $clave, PASSWORD_DEFAULT );
    echo $claveHash;
?>        
    </main>
<?php
include '../layout/footer.html';