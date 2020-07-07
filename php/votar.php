<html>
<head>

<?
// Main
if (!empty($_GET)) {

  $variable = $_GET["doce"];

  $biscoito = file_get_contents("exercicio8/biscoito.txt");
  $bolacha = file_get_contents("exercicio8/bolacha.txt");
  $indiferente = file_get_contents("exercicio8/indiferente.txt");
  $votos_totais  = file_get_contents("exercicio8/votos_totais.txt");

  if ($variable == "biscoito") file_put_contents('exercicio8/biscoito.txt', $biscoito+=1);
  elseif ($variable == "bolacha") file_put_contents('exercicio8/bolacha.txt', $bolacha+=1);
  else file_put_contents('exercicio8/indiferente.txt', $indiferente+=1);
  file_put_contents('exercicio8/votos_totais.txt', $votos_totais+=1);

  $indiferente = $indiferente * 100 / $votos_totais;
  $biscoito = $biscoito * 100 / $votos_totais;
  $bolacha = $bolacha * 100 / $votos_totais;

  echo "<center>";
  echo "<hr>";
  echo "<p> <b> Biscoito </b> $biscoito <p><br>";
  echo "<p> <b> Bolacha </b>  $bolacha  <p><br>";
  echo "<p> <b> Indiferente </b> $indiferente <p><br>";
  echo "<p> <b> Votos Totais </b> $votos_totais <p><br>";
  echo "<hr>";
}
?>

</html>
</head>
