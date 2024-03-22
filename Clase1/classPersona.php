<?php

class Persona
{
  private $nombre;
  private $apellido;
  private $doc;

  public function __construct($nom, $ap, $doc)
  {
    $this->nombre = $nom;
    $this->apellido = $ap;
    $this->doc = $doc;
  }
  public function getNombre()
  {
    return $this->nombre;
  }
  public function getApellido()
  {
    return $this->apellido;
  }
  public function getDocumento()
  {
    return $this->doc;
  }

  public function setNombre($nuevoNombre)
  {
    $this->nombre = $nuevoNombre;
  }
  public function setApellido($nuevoApellido)
  {
    $this->nombre = $nuevoApellido;
  }
  public function setDocumento($nuevoDocumento)
  {
    $this->nombre = $nuevoDocumento;
  }
}
