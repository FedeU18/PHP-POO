<?php

include "Fecha.php";

$objFecha = new Fecha(5, 7, 2001);

// echo $objFecha->mostrarFechaAbreviada() . "\n";
// echo $objFecha->mostrarFechaExtendida() . "\n";

echo "\n\n\n" . $objFecha->incrementarUnDia(30, 11, 2001) . "\n\n\n";
echo "\n\n\n" . $objFecha->incrementarUnDia(31, 12, 2001) . "\n\n\n";
echo "\n\n\n" . $objFecha->incrementarUnDia(29, 2, 2024) . "\n\n\n";
echo "\n\n\n" . $objFecha->incrementarUnDia(2, 2, 2024) . "\n\n\n";
echo "\n\n\n" . $objFecha->incrementarUnDia(15, 7, 2024) . "\n\n\n";
echo "\n\n\n" . $objFecha->incrementarUnDia(31, 7, 2024) . "\n\n\n";

echo $objFecha;
