<?php
    $nombre="Lautaro";

    $prueba = $nombre;
    $referencia = &$nombre;

    echo $prueba;
    echo $referencia;

    $nombre = "Lucas";

    echo $prueba;
    echo $referencia;


?>