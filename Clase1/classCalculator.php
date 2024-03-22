<?php

class Calculadora
{
  private $x;
  private $y;

  public function __construct($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
  }

  //getters
  public function getFirstNumber()
  {
    return $this->x;
  }
  public function getSecondNumber()
  {
    return $this->y;
  }

  //setters
  public function setFirstNumber($newNumber)
  {
    return $this->x = $newNumber;
  }
  public function setSecondNumber($newNumber)
  {
    return $this->y = $newNumber;
  }
  /**
   * suma los 2 números
   */
  public function suma()
  {
    return $this->getFirstNumber() + $this->getSecondNumber();
  }
  /**
   * resta los 2 números
   */
  public function resta()
  {
    return $this->getFirstNumber() - $this->getSecondNumber();
  }
  /**
   * multiplica los 2 números
   */
  public function multiplicacion()
  {
    return $this->getFirstNumber() * $this->getSecondNumber();
  }
  /**
   * divide los 2 números
   */
  public function division()
  {
    return $this->getFirstNumber() / $this->getSecondNumber();
  }

  public function __toString()
  {
    return "Los números son " . $this->getFirstNumber() . " y " . $this->getSecondNumber() . "\n";
  }
  public function __destruct()
  {
    echo $this . " instancia destruida, no hay referencias a este objeto \n";
  }
}


$p = new Calculadora(1, 5);

echo $p->suma() . "\n";
echo $p->resta() . "\n";
echo $p->multiplicacion() . "\n";
echo $p->division() . "\n";
