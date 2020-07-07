
<html>
<body>
<center>
  <form action="exercicio3.php" method="GET">
    Massa: <input type="text" name="massa"><br>
    Altura: <input type="text" name="altura"><br>
    <input type="submit">
</form>


<?php
if (!empty($_GET)) {

  $IMC = $_GET["massa"] / ($_GET["altura"] * $_GET["altura"]);

  if ($IMC < 17) echo ("Muito abaixo do peso");
  else if ($IMC < 18.49) echo ("Abaixo do peso");
  else if($IMC < 24.99) echo("Peso normal");
  else if($IMC < 29.99) echo ("Acima do peso");
  else if($IMC < 34.99) echo ("Obesidade I");
  else if($IMC < 39.99) echo ("Obesidade II (Severa)");
  else echo ("Obesidade III (Mórbida)");

}

 ?>

</center>
</body>
</html>
