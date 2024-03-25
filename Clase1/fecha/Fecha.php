<?php

class Fecha
{
  private $dia;
  private $mes;
  private $meses;
  private $ano;

  public function __construct($d, $m, $a)
  {
    $this->dia = $d;
    $this->mes = $m;
    $this->ano = $a;
    $this->meses = [
      1 => "enero",
      2 => "febrero",
      3 => "marzo",
      4 => "abril",
      5 => "mayo",
      6 => "junio",
      7 => "julio",
      8 => "agosto",
      9 => "septiembre",
      10 => "octubre",
      11 => "noviembre",
      12 => "diciembre",
    ];
  }

  public function getDia()
  {
    return $this->dia;
  }
  public function getMes()
  {
    return $this->mes;
  }
  public function getMeses()
  {
    return $this->meses;
  }
  public function getAno()
  {
    return $this->ano;
  }

  public function setDia($nuevoDia)
  {
    $this->dia = $nuevoDia;
  }
  public function setMes($nuevoMes)
  {
    $this->mes = $nuevoMes;
  }
  public function setAno($nuevoAno)
  {
    $this->ano = $nuevoAno;
  }
  /**
   * muestra la fecha con el formato dd/mm/aa
   * @return string
   */
  public function mostrarFechaAbreviada()
  {
    $fechaAbreviada = $this->getDia() . "/" . $this->getMes() . "/" . $this->getAno();
    return $fechaAbreviada;
  }
  /**
   * muestra la fecha con el formato (dia) de (mes) de (año)
   * @return string
   */
  public function mostrarFechaExtendida()
  {
    $fechaExtendida = $this->getDia() . " de " . $this->getMeses()[$this->getMes()] . " de " . $this->getAno();
    return $fechaExtendida;
  }

  public function __toString()
  {
    return "la fecha es: " . $this->mostrarFechaAbreviada() . "\n\n\n";
  }
  public function __destruct()
  {
    echo "el fin de los tiempos llegó";
  }
}
