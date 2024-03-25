<?php

include "Fecha.php";

$objFecha = new Fecha(5, 7, 2001);

echo $objFecha->mostrarFechaAbreviada() . "\n";
echo $objFecha->mostrarFechaExtendida() . "\n";

echo $objFecha;
