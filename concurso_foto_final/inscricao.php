<?php
  session_start();
  echo "<center>";
  $string = "TEstenkdjsahdkljsa" +  date("Y.m.d");
  $token = sha1($string);
  $_SESSION['token'] = $token;


  $name = $_GET["nome"];
  $email = $_GET["email"];
  $senha = $_GET["senha"];

  $db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

  $senhaCriptografada = sha1($senha);
  $db->exec("INSERT INTO Artista (nome, email, senha) VALUES ('$name', '$email', '$senhaCriptografada');");
  
  $result = $db->query("SELECT ID FROM Artista WHERE nome='$name';");
  $result = $result->fetchArray();
  
  $ID = $result["ID"];
  $_SESSION['id_artista'] = $ID;

  $db->close();

  header("Location: http://fourier.ifsc.usp.br/~stefantcleal/concurso_foto_final/adicionar_fotos.php", true, 301);

?> 