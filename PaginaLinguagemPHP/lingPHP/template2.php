<h3>Exemplo 27:</h3>
<?php
echo "<xmp>";
$myfile = fopen("lingPHP/2_27.php", "r") or die("Unable to open file!");
echo fread($myfile,filesize("lingPHP/2_27.php"));
fclose($myfile);
echo "</xmp>";
?>
<h4>Rodando:</h4>
<iframe src="http://fourier.ifsc.usp.br/~fabio/exerciciosPHP/lingPHP/2_27.php" height="400" width="600"></iframe>
<br><br>

<h3>Exemplo 28:</h3>
<?php
echo "<xmp>";
$myfile = fopen("lingPHP/2_28.php", "r") or die("Unable to open file!");
echo fread($myfile,filesize("lingPHP/2_27.php"));
fclose($myfile);
echo "</xmp>";
?>
<h4>Rodando:</h4>
<iframe src="http://fourier.ifsc.usp.br/~fabio/exerciciosPHP/lingPHP/2_27.php" height="400" width="600"></iframe>
<br><br>
