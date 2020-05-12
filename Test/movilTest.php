<?php

use PHPUnit\Framework\TestCase;
include "../Clases/dispositivo.php";
include "../Clases/movil.php";

final class movilTest extends TestCase
{
  public function testPantalla()
  {
    $mov = new Movil("Xiaomi","Mi 10 Pro","Blanco","1080","108","4500");
    $mov->getPantalla();

    $target = $mov->getPantalla();
    $expected = 1080;
    $this->assertEquals($expected, $target);
  }
  public function testCamara()
  {
    $mov = new Movil("Xiaomi","Mi 10 Pro","Blanco","1080","108","4500");
    $mov->getCamara();

    $target = $mov->getCamara();
    $expected = 108;
    $this->assertEquals($expected, $target);
  }
  public function testBateria()
  {
    $mov = new Movil("Xiaomi","Mi 10 Pro","Blanco","1080","108","4500");
    $mov->getBateria();

    $target = $mov->getBateria();
    $expected = 4500;
    $this->assertEquals($expected, $target);
  }
  public function testMarca()
  {
    $mov = new Movil("Xiaomi","Mi 10 Pro","Blanco","1080","108","4500");
    $mov->getMarca();

    $target = $mov->getMarca();
    $expected = "Xiaomi";
    $this->assertEquals($expected, $target);
  }
  public function testModelo()
  {
    $mov = new Movil("Xiaomi","Mi 10 Pro","Blanco","1080","108","4500");
    $mov->getModelo();

    $target = $mov->getModelo();
    $expected = "Mi 10 Pro";
    $this->assertEquals($expected, $target);
  }
  public function testColor()
  {
    $mov = new Movil("Xiaomi","Mi 10 Pro","Blanco","1080","108","4500");
    $mov->getColor();

    $target = $mov->getColor();
    $expected = "Blanco";
    $this->assertEquals($expected, $target);
  }

}
 ?>
