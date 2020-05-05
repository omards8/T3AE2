<?php

  class Dispositivo
  {
    protected $marca;
    protected $modelo;
    protected $color;

    public function __construct($marca, $modelo, $color)
    {
      $this->marca = $marca;
      $this->modelo = $modelo;
      $this->color = $color;
    }
    public function getMarca()
    {
      return $this->marca;
    }
    public function getModelo()
    {
      return $this->modelo;
    }
    public function getColor()
    {
      return $this->color;
    }
    public function setMarca($marca)
    {
      $this->marca = $marca;
    }
    public function setModelo($modelo)
    {
      $this->modelo = $modelo;
    }
    public function setColor($color)
    {
      $this->color = $color;
    }
    public function mostrarDispositivo($dispositivo)
    {
      echo "<br><br>Marca: ";
      echo $dispositivo->getMarca();
      echo "<br>Modelo: ";
      echo $dispositivo->getModelo();
      echo "<br>Color: ";
      echo $dispositivo->getColor();
    }

  }

?>
