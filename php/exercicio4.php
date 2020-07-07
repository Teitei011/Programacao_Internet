<html>
<body>
  <h1> Tabela de Pitagora </h1>

  <form action="exercicio4.php" method="GET">
    Nome: <input type="text" name="nome"><br>
    <input type="submit">
</form>

<?php

$tabela = [
  "a" => 1,
  "b" => 2,
  "c" => 3,
  "d" => 4,
  "e" => 5,
  "f" => 6,
  "g" => 7,
  "h" => 8,
  "i" => 9,
  "j" => 1,
  "k" => 2,
  "l" => 3,
  "m" => 4,
  "n" => 5,
  "o" => 6,
  "p" => 7,
  "q" => 8,
  "r" => 9,
  "s" => 1,
  "t" => 2,
  "u" => 3,
  "v" => 4,
  "w" => 5,
  "x" => 6,
  "y" => 7,
  "z" => 8,
];

if (!empty($_GET)) {
  $nome = $_GET["nome"];
  $nome = str_split($nome);
  $soma = 0;

  foreach($nome as $value){
      $soma += $tabela[$value];
  }

  while ($soma > 9) {
    $unidade = $soma % 10;
    $dezena = (int)ceil($soma / 10);
    $soma = $unidade + $dezena;
  }

    echo "Numero magico eh: ".$soma;
  }
 ?>

</body>
</html>
