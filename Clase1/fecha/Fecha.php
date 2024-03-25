<?php

class Fecha
{
  private $dia;
  private $mes;
  private $meses;
  private $ano;
  private $mesesYSusDias;

  public function __construct($d, $m, $a)
  {
    $this->dia = $d;
    $this->mes = $m;
    $this->ano = $a;
    $this->meses = [
      1 => ["enero", 31],
      2 => ["febrero", 28],
      3 => ["marzo", 31],
      4 => ["abril", 30],
      5 => ["mayo", 31],
      6 => ["junio", 30],
      7 => ["julio", 31],
      8 => ["agosto", 31],
      9 => ["septiembre", 30],
      10 => ["octubre", 31],
      11 => ["noviembre", 30],
      12 => ["diciembre", 31],
    ];
    if (($this->ano % 4 == 0 && $this->ano % 100 != 0) || $this->ano % 400 == 0) {
      $this->meses[2][1] = 29;
    }
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
    $fechaExtendida = $this->getDia() . " de " . $this->getMeses()[$this->getMes()][0] . " de " . $this->getAno();
    return $fechaExtendida;
  }

  /**
   * le aplica una suma de días a una fecha determinada
   * @param int $dia
   * @param string $fecha
   * @return string
   */
  public function incrementarFecha($dia, $fecha)
  {
  }

  /**
   * incrementa un día a la fecha
   */
  public function incrementarUnDia($dia, $mes, $ano)
  {
    if ($mes == 12 && $dia == 31) {
      $ano++;
      $dia = 1;
      $mes = 1;
    } elseif ($this->comprobarCantidadDelMes($mes) == 1 && $mes != 12 && $dia == 31) {
      $mes++;
      $dia = 1;
    } elseif ($this->comprobarCantidadDelMes($mes) == -1  && $dia == 30) {
      $mes++;
      $dia = 1;
    } elseif ($this->comprobarCantidadDelMes($mes) == 0  && ($dia == 28 || $dia == 29)) {
      $mes++;
      $dia = 1;
    } elseif ($this->comprobarCantidadDelMes($mes) == 1  && $dia < 31) {
      $dia++;
    } elseif ($this->comprobarCantidadDelMes($mes) == -1  && $dia < 30) {
      $dia++;
    } elseif ($this->comprobarCantidadDelMes($mes) == -1  && ($dia < 28 || $dia < 29)) {
      $dia++;
    }

    return "$dia/$mes/$ano";
  }

  /**
   * retorna 1 si el mes tiene 31 dias, -1 si el mes tiene 30 y retorna 0 si el mes es febrero
   */
  public function comprobarCantidadDelMes($mesConsultado)
  {
    $diasDelMes = 0;
    if ($this->getMeses()[$mesConsultado][1] == 31) {
      $diasDelMes = 1;
    } else if ($this->getMeses()[$mesConsultado][1] == 30) {
      $diasDelMes = -1;
    }
    return $diasDelMes;
  }


  public function __toString()
  {
    return "\nla fecha es: " . $this->mostrarFechaAbreviada() . "\n\n\n";
  }
  public function __destruct()
  {
    echo "el fin de los tiempos llegó";
  }
}
