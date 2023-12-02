<?php
include '../layout/header.php';
?>
    <main class="container">
        <h1>Fecha en PHP</h1>
<?php
    /*
     * mostrar la fecha
     * formato: Sábado 02/12/2023
     */
    $diaMes = date('d');
    //echo $diaMes;
    $mes = date('m');
    //echo $mes;
    $anio = date('Y');
    //echo $diaMes, '/', $mes, '/', $anio;
    $fecha = date('d/m/Y');
    /* día de la semana */
    $numeroDiaSemana = date('w');
    $diaSemana = match ( $numeroDiaSemana ){
        '0' => 'Domingo',
        '1' => 'Lunes',
        '2' => 'Martes',
        '3' => 'Miércoles',
        '4' => 'Jueves',
        '5' => 'Viernes',
        '6' => 'Sábado'
    };

    echo $diaSemana, ' ', $fecha;
?>
    <hr>
<?php
    $fechaObjeto = new DateTime();
    echo $fechaObjeto->format('d/m/Y');
?>        
    </main>
<?php
include '../layout/footer.html';