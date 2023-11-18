<?php
    // declaración de variables  $
    $numero = 42;
    $curso = 'Desarrollo web con PHP y MySQL';

    // declaración de constantes 'const'
    const NOMBRE = 'Marcos';
?>
    <h1>Variables y constantes en PHP</h1>

<?php
    echo 'Curso: ', $curso;
    echo '<br>';
    echo 'Número: ', $numero;
    echo '<br>';
    echo 'Nombre: ', NOMBRE;
?>
<hr>
<?php
    // sobreescritura
    $numero = 73;
    echo $numero;
    // NOMBRE = 'x';
    /* no se puede sobreescribir una constante */
