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
  private $logeado;

  public function __construct($nombre, $clave, $frase)
  {
    $this->usuario = [
      "nombre" => $nombre,
      "clave" => [$clave],
      "frase" => $frase
    ];
    $this->logeado = false;
  }

  //getter
  public function getUsuario()
  {
    return $this->usuario;
  }
  public function getLogeado()
  {
    return $this->logeado;
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
    $this->usuario["frase"] = $nuevaFrase;
  }
  public function setLogeado()
  {
    $this->logeado = !$this->logeado;
  }
  //metodos
  public function validarClave($intento)
  {
    $mensaje = "";
    if ($this->getUsuario()["clave"][0] == $intento) {
      $mensaje = "Logeado correctamente \n";
      $this->setLogeado();
    } else {
      $mensaje = "Clave incorrecta, " . $this->recordar() . "\n";
    }
    return $mensaje;
  }

  public function nuevaClave($nuevaClave)
  {
    $mensaje = "";
    if (in_array($nuevaClave, $this->getUsuario()["clave"])) {
      array_unshift($this->getUsuario()["clave"], $nuevaClave);
      if (count($this->getUsuario()["clave"]) == 5) {
        array_pop($this->getUsuario()["clave"]);
      }
      $mensaje = "Contraseña cambiada correctamente\n";
    } else {
      $mensaje = "La nueva contraseña no puede ser una que haya sido usada recientemente\n";
    }
    return $mensaje;
  }
  public function recordar()
  {
    $mensaje = "la frase para recordar la contraseña es: " . $this->getUsuario()["frase"];
    echo $mensaje;
  }

  public function __toString()
  {
    return "Usuario: " . $this->getUsuario()["nombre"];
  }
  public function __destruct()
  {
    echo "el usuario explotó";
  }
}
