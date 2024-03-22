<?php

//Enunciado:
/*
Implementar una clase Login que almacene el nombreUsuario, Clave, frase que permite
recordar la Clave ingresada y las ultimas 4 Claves utilizadas.
Implementar un método que permita validar una Clave con la almacenada
un método para cambiar la Clave actual por otra nueva
el sistema deja cambiar la Clave siempre y cuando esta no haya sido usada recientemente (es
decir no se encuentra dentro de las cuatro almacenadas).
Implementar el método recordar que dado el usuario, muestra la frase que permite recordar su Clave
*/

class Login
{
  private $usuario = [];

  public function __construct($nombre, $clave, $frase)
  {
    $this->usuario = [
      "nombre" => $nombre,
      "clave" => [$clave],
      "frase" => $frase
    ];
  }

  //getter
  public function getUsuario()
  {
    return $this->usuario;
  }

  //setters
  public function setNombreUsuario($nuevoNombre)
  {
    $this->usuario["nombre"] = $nuevoNombre;
  }
  public function setClaveUsuario($nuevaClave)
  {
    array_unshift($this->usuario["clave"], $nuevaClave);
  }
  public function setFraseUsuario($nuevaFrase)
  {
    array_unshift($this->usuario["frase"], $nuevaFrase);
  }

  //metodos
  public function validarClave($intento)
  {
    return $this->getUsuario()["clave"][0] == $intento;
  }

  public function nuevaClave($nuevaClave)
  {
    array_unshift($this->getUsuario()["clave"], $nuevaClave);
    if (count($this->getUsuario()["clave"]) == 5) {
      array_pop($this->getUsuario()["clave"]);
    }
  }

  public function __toString()
  {
    return "El usuario " . $this->getUsuario()["nombre"] . " su última Clave es: "
      . $this->getUsuario()["clave"][0]
      . ", y su frase de recuperación es "
      . "'" . $this->getUsuario()["frase"]
      . "'\n";
  }
  public function __destruct()
  {
    echo "el usuario explotó";
  }
}


$objUsuario = new Login("Fede", "1234", "esta es la frase de recuperación");

$validar = $objUsuario->validarClave("1234");
