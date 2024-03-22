<?php
/*
definición e implementación de una clase
*/

// class UnaClase{
//   //atributos: definen características, siempre privados
//   private $var_1;

//   //métodos: definen el comportamiento.
//   public function c_1 () {}

//   // método constructor: crear objetos de una clase
//   public function __construct($v1){
//     $this->var_1 =$v1;

//   }

//   // método destructor: se ejecuta en el instante en que un objeto deja de ser accesible
//   public function __destruct(){

//   }

//   //getters: obtener valores de variables
//   public function getVar_1(){
//     return $this->var_1;
//   }

//   //setters: modificar valores de variables
//   public function setVar_1($valor1){
//     return $this->var_1 = $valor1;
//   }

//   //convierte objeto a string
//   public function __toString(){

//   }
// }

class Punto
{
  private $coordenada_x;
  private $coordenada_y;
  //constructor
  public function __construct($x, $y)
  {
    $this->coordenada_x = $x;
    $this->coordenada_y = $y;
  }

  //getters
  public function getCoordenada_x()
  {
    return $this->coordenada_x;
  }
  public function getCoordenada_y()
  {
    return $this->coordenada_y;
  }

  //setters
  public function setCoordenada_x($x)
  {
    return $this->coordenada_x = $x;
  }
  public function setCoordenada_y($y)
  {
    return $this->coordenada_y = $y;
  }

  /**
   *Devuelve la distancia entre el objeto Punto y el recibido por parametro
   * @param unknown $otroPunto
   * @return number
   */

  public function distancia($otroPunto)
  {
    $dx = $this->getCoordenada_x() - $otroPunto->getCoordenada_x();
    $dy = $this->getCoordenada_y() - $otroPunto->getCoordenada_y();
    $laDistancia = pow(($dx * $dx + $dy * $dy), 0.5);
    return $laDistancia;
  }

  /**
   * Devuelve un nuevo punto, con la resta entre dos puntos.
   * @param unknown $otroPunto
   * @return Punto
   */

  public function restar($otroPunto)
  {
    $x = $this->getCoordenada_x() - $otroPunto->getCoordenada_x();
    $y = $this->getCoordenada_y() - $otroPunto->getCoordenada_y();
    $nuevoPunto =  new Punto($x, $y);
    return $nuevoPunto;
  }

  /**
   * Devuelve la norma de un punto 
   */
  public function  norma()
  {
    $x2 = $this->getCoordenada_x() * $this->getCoordenada_x();
    $y2 = $this->getCoordenada_y() * $this->getCoordenada_y();
    return pow(($x2 + $y2), 0.5);
  }

  /**
   * Devuelve la distancia entre ambos puntos.
   * @param Punto $otroPunto
   * @return number
   */
  public function distancia_2($otroPunto)
  {
    $r = $this->restar($otroPunto);
    return $r->norma();
  }

  public function __toString()
  {
    return "(" . $this->getCoordenada_x() . "," . $this->getCoordenada_y() . ")\n";
  }

  public function __destruct()
  {
    echo $this . " instancia destruida, no hay referencias a este objeto \n";
  }
}

$p = new Punto(3, 5);

$p2 = new Punto(10, 14);
