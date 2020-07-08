<?php
  // Start the session
  session_start();
  $string = "TEstenkdjsahdkljsa" +  date("Y.m.d");
  $token = sha1($string);
  

?>


<html>
<head>
        <title>Classificados - home page</title>
</head>
<body  TEXT="#000000" LINK="#0000ff" bgcolor="#FFFFFF">
        <BASEFONT SIZE=4>
        <h2><strong><i> Classificados - Home Page </i></strong></h2>
        <p>
        <?php 
			$db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
			
			$classe = $_GET["classe"];
			$titulo = $_GET["titulo"];
			$descricao = $_GET["descricao"];
			$nome = $_SESSION['usuario'];
			
			$id_anunciante = $db->query("SELECT ID FROM Anunciante WHERE nome='$nome';");
			$id_anunciante = $id_anunciante->fetchArray();
			$id_anunciante = $id_anunciante["ID"];
			echo "<center><h1>ID: $id_anunciante</h1></center>";

			$db->exec("INSERT INTO  Anuncio (ANUNCIANTE, titulo, descricao) VALUES ('$id_anunciante', '$titulo', '$descricao');");

			print "<center><p> Obrigado por utilizar nosso serviço de classificados </p> \n";
			print "<p> \n </p>";
			print "<p> Seu classificado foi publicado com sucesso, confira os dados abaixo </p> \n";
			print "<p> \n";


			print "<p> \n </p>";
			print "<p> Titulo: " . $_GET['titulo'] . "</p> \n";
			print "<p> Descricao: " . $_GET['descricao'] . "</p> \n</center>";

			echo "<p>Clique aqui para <a href='todos_os_anuncios.php'> ver os anuncios</a></p>";


	
			$db->close();

        ?>
</body>
</html>
