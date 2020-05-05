<?php

   interface funciona{
     public function encender($movil);
     public function apagar($movil);
     public function testear($movil);
     }

  class Movil extends Dispositivo implements funciona
  {

    private $pantalla;
    private $camara;
    private $bateria;

    public function __construct($marca, $modelo, $color, $pantalla, $camara, $bateria)
    {
      parent::__construct($marca, $modelo, $color);
      $this->pantalla = $pantalla;
      $this->camara = $camara;
      $this->bateria = $bateria;
    }
    public function getPantalla()
    {
      return $this->pantalla;
    }
    public function getCamara()
    {
      return $this->camara;
    }
    public function getBateria()
    {
      return $this->bateria;
    }
    public function setPantalla($pantalla)
    {
      $this->pantalla = $pantalla;
    }
    public function setCamara($camara)
    {
      $this->camara = $camara;
    }
    public function setBateria($bateria)
    {
      $this->bateria = $bateria;
    }
    public function mostrarMovil($movil)
    {
      parent::mostrarDispositivo($movil);
      echo "<br>Pantalla: ";
      echo $movil->getPantalla();
      echo "<br>Camara: ";
      echo $movil->getCamara();
      echo "<br>Bateria: ";
      echo $movil->getBateria();
    }
    public function encender($movil)
    {
      if ($this->pantalla == 0) {
        echo "<br>No enciende. La pantalla no funciona.";
      }
      if ($this->bateria == 0) {
        echo "<br>No enciende. La bateria no funciona.";
      }
      if (($this->pantalla != 0) && ($this->bateria != 0)) {
          echo "<br>El dispositivo se encendio correctamente.";
      }
    }
    public function apagar($movil)
    {
      if ($this->pantalla == 0) {
        echo "<br>No se apaga. La pantalla no funciona.";
      }
      if ($this->bateria == 0) {
        echo "<br>No se puede apagar un dispositivo que no tiene bateria.";
      }
      if (($this->pantalla != 0) && ($this->bateria != 0)) {
          echo "<br>Se apago correctamente.";
      }
    }
    public function testear($movil)
    {
      if ($this->pantalla == 0) {
        echo "<br>No funciona correctamente. Error: Pantalla";
      }
      if ($this->camara == 0) {
        echo "<br>No funciona correctamente. Error: Camara";
      }
      if ($this->bateria == 0) {
        echo "<br>No funciona correctamente. Error: Bateria";
      }
      if (($this->pantalla != 0) && ($this->bateria != 0) && ($this->camara != 0)) {
          echo "<br>Se testeo correctamente.";
      }
    }
  }

?>
