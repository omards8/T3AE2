<?php
  function autoload($clase){
    include "Clases/". $clase . ".php";
  }
  spl_autoload_register('autoload');

  $movil1 = new Movil("Xiaomi","Mi 10 Pro","Blanco","1080","108","4500");
  $movil1->mostrarMovil($movil1);
  $movil1->encender($movil1);
  $movil1->apagar($movil1);
  $movil1->testear($movil1);

  $movil2 = new Movil("OnePlus","8 Pro","Azul","2160","64","4300");
  $movil2->mostrarMovil($movil2);
  $movil2->encender($movil2);
  $movil2->apagar($movil2);
  $movil2->testear($movil2);

  $movil3 = new Movil("Samsung","S2","Blanco","0","5","1500"); //No funciona pantalla
  $movil3->mostrarMovil($movil3);
  $movil3->encender($movil3);
  $movil3->apagar($movil3);
  $movil3->testear($movil3);

  $movil4 = new Movil("Apple","iPhone 8","Blanco","720","0","1500"); //No funciona camara
  $movil4->mostrarMovil($movil4);
  $movil4->encender($movil4);
  $movil4->apagar($movil4);
  $movil4->testear($movil4);

  $movil5 = new Movil("Huawei","P30","Blanco","720","50","0"); //No funciona bateria
  $movil5->mostrarMovil($movil5);
  $movil5->encender($movil5);
  $movil5->apagar($movil5);
  $movil5->testear($movil5);
  ?>
