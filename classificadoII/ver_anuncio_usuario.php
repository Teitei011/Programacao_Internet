<?php
  // Start the session
  session_start();
  $string = "TEstenkdjsahdkljsa" +  date("Y.m.d");
  $token = sha1($string);

  $db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

  $usuario = $_SESSION["nome"];
  $result = $db->query("SELECT ID FROM Anunciante WHERE nome='$usuario';");
  $ID_ANUNCIANTE = $result->fetchArray(); 

  $result = $db->query("SELECT * FROM Anuncio WHERE ANUNCIANTE='$ID_ANUNCIANTE';");
  $result = $result->fetchArray();

  $classe = $result['classe'];
  $titulo = $result['titulo'];
  $descricao = $result['descricao'];

  $db->close();
?>