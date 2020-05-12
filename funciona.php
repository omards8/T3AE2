<?php
/**
 *
 */
interface funciona{
  public function encender();
  public function apagar();
  public function testear();
  }

  /**
   *
   */
  class movil implements funciona
  {

    public function encender($pantalla, $camara, $bateria)
    {
      if ($this->pantalla == 0) {
        echo "No enciende. La pantalla no funciona.";
      }
      if ($this->bateria == 0) {
        echo "No enciende. La bateria no funciona.";
      } else {
          echo "El dispositivo se enciendo correctamente.";
      }
    }
    public function apagar($pantalla, $camara, $bateria)
    {
      if ($this->pantalla == 0) {
        echo "No se apaga. La pantalla no funciona.";
      }
      if ($this->bateria == 0) {
        echo "No se puede apagar un dispositivo que no tiene bateria.";
      } else {
          echo "Se apago correctamente.";
      }
    }
    public function testear($pantalla, $camara, $bateria)
    {
      if ($this->pantalla == 0) {
        echo "No funciona correctamente. Error:Pantalla";
      }
      if ($this->camara == 0) {
        echo "No funciona correctamente. Error:Camara";
      }
      if ($this->bateria == 0) {
        echo "No funciona correctamente. Error:Bateria";
      } else {
          echo "Se testeo correctamente.";
      }
    }
  }


 ?>
