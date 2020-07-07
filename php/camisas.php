<?php
   Header("Content-type: image/png");
   $time = $_POST['time'];
   $camisa = $_POST['camisa'];
   $nome = $_POST['nome'];
   if ($time=="corint") {
      $img = ImageCreateFromPng("camisa_corint.png");
      $cor = ImageColorAllocate($img, 0, 0, 0);
      }
   if ($time=="palmei") {
      $img = ImageCreateFromPng("camisa_palmei.png");
      $cor = ImageColorAllocate($img, 0, 180, 0);
      }
   $branco = ImageColorAllocate($img, 255, 255, 255);
   ImageFilledRectangle($img, 60, 106, 110, 134, $branco);
   ImageString($img, 5, 60, 104, $nome, $cor);
   ImageString($img, 5, 80, 121, $camisa, $cor);
   ImagePng($img);
   ImageDestroy($img);
?>
