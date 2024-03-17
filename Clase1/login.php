<?php

//Enunciado:
/*
Implementar una clase Login que almacene el nombreUsuario, contraseña, frase que permite
recordar la contraseña ingresada y las ultimas 4 contraseñas utilizadas.
Implementar un método que permita validar una contraseña con la almacenada
un método para cambiar la contraseña actual por otra nueva
el sistema deja cambiar la contraseña siempre y cuando esta no haya sido usada recientemente (es
decir no se encuentra dentro de las cuatro almacenadas).
Implementar el método recordar que dado el usuario, muestra la frase que permite recordar su contraseña
*/
class Login {
  private $nombreUsuario;
  private $contrasena;
  private $frase;

  public function __construct($nombre, $contra) {
    $this->nombreUsuario = $nombre;
    $this->contrasena = $contra;
    $this->frase = $contra;
  }
//getters
  public function getNombre(){
    return $this->nombreUsuario;
  }
  public function getContrasena(){
    return $this->contrasena;
  }
  public function getFrase(){
    return $this->frase;
  }
//setters
  public function setContrasena($nuevaContra){
    $this->frase = $this->frase . " " . $nuevaContra;
    return $this->contrasena = $nuevaContra;
  }
//métodos
  public function validarContrasena($intentoContra){
    if($intentoContra == $this->contrasena){
      echo "contraseña correcta \n";
    } else {
      echo "contraseña incorrecta \n";
    }
  }


  public function __toString(){}
  public function __destruct(){}

}