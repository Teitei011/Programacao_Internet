<!DOCTYPE html>
<html lang="pt-br">

<head>
<title>Contador</title>
</head>

<body>
<?php

  $gcont1 = $_GET['cont1'];
  $gcont2 = $_GET['cont2'];
  $gcont3 = $_GET['cont3'];
    //
	$fcont1 = file_get_contents('cont1.dat');
	$fcont2 = file_get_contents('cont2.dat');
	$fcont3 = file_get_contents('cont3.dat');
	//
	echo "<p> gcont1 = $gcont1 </p>";
	echo "<p> gcont2 = $gcont2 </p>";
	echo "<p> gcont3 = $gcont3 </p>";
	echo "<br>";
	echo "<p> fcont1 = $fcont1 </p>";
	echo "<p> fcont2 = $fcont2 </p>";
	echo "<p> fcont3 = $fcont3 </p>";
	echo "<br>";
	//
	$fcont1 += $gcont1;
	$fcont2 += $gcont2;
	$fcont3 += $gcont3;
	file_put_contents('cont1.dat', $fcont1);
	file_put_contents('cont2.dat', $fcont2);
	file_put_contents('cont3.dat', $fcont3);
	//
	echo "Saída da variável";
	echo "<p> fcont1 = $fcont1 </p>";
	echo "<p> fcont2 = $fcont2 </p>";
	echo "<p> fcont3 = $fcont3 </p>";
	echo "<br>";
	//
?>
</body>
</html>
