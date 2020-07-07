<?php 
	session_start();
	session_destroy();
?>

<!DOCTYPE html>
<html>
<body>

<?PHP
$nome = $_SESSION['MeuSite']['nomeUsuario'];
$compra1 = $_SESSION['MeuSite']['compras'][1];
$compra2 = $_SESSION['MeuSite']['compras'][2];
$compra3 = $_SESSION['MeuSite']['compras'][3];

echo "<p>Nome = $nome</p>";
echo "<p>Item 1 de compra = $compra1</p>";
echo "<p>Item 2 de compra = $compra2</p>";
echo "<p>Item 3 de compra= $compra3</p>";

?>

</body>
</html>	