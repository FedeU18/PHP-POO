<?php
include "./login.php";
//PROGRAMA PRINCIPAL

echo "Ingrese un nombre para el nuevo usuario: \n";
$nombre = trim(fgets(STDIN));
echo "Ingrese una clave: \n";
$clave = trim(fgets(STDIN));
echo "Ingrese una frase para recordar la clave: \n";
$frase = trim(fgets(STDIN));

$usuario = new Login($nombre, $clave, $frase);

echo $usuario . ", creado correctamente\n\n\n";

do {

  echo "Ingrese su clave para iniciar sesión: \n";
  echo "=>  ";
  $clavePrueba = trim(fgets(STDIN));
  $mensaje = $usuario->validarClave($clavePrueba);
  echo $mensaje;
} while (!$usuario->getLogeado());
