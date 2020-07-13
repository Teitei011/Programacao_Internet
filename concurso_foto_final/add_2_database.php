<?php
  session_start();

  $concurso = $_GET["concurso"];
  $titulo = $_GET["titulo"];
  $descricao = $_GET["descricao"];
  $ID_Artista = $_SESSION["id_artista"];

  $db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

// Upload function
  $target_dir = "assets/upload/";
  $target_file = $target_dir . basename($_FILES["foto"]["name"]);
  move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

  $caminho = $_FILES["foto"]["tmp_name"];
  echo "Caminho: $caminho";

  $db->exec("INSERT INTO  Photo(ID_Artist, titulo, descricao, votos, caminho, vai_participar) VALUES 
  ('$ID_Artista', '$titulo', '$descricao', 0, ' $target_file', 1);");
	
  $db->close();

  
?>