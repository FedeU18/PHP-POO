<?php

class Calculatora {
  public function __construct() {}
  
  public function suma($a,$b){
    return $a + $b;
  }
  public function resta($a,$b){
    return $a - $b;
  }
  public function multiplicacion($a,$b){
    return $a * $b;
  }
  public function division($a,$b){
    return $a / $b;
  }
  public function __toString(){}
  public function __destruct(){}
}