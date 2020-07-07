<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<body>

<p> Esta é a página 1. Aqui estão sendo armazenados alguns elementos na sessão. </p> 

<?PHP
$_SESSION['MeuSite']['nomeUsuario'] = "José da Silva";
$_SESSION['MeuSite']['compras'][1] = "cadeira";
$_SESSION['MeuSite']['compras'][2] = "mesa";
$_SESSION['MeuSite']['compras'][3] = "geladeira";
?>

<p> <a href="session2.php">Vá para a página 2</a> </p> 

</body>
</html>	