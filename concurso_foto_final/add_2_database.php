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
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }

  move_uploaded_file($_FILES["foto"]["tmp_name"], $_FILES['foto1']['name']);


  $caminho = $_FILES["foto"]["tmp_name"];

  $db->exec("INSERT INTO  Photo(ID_Artist, titulo, descricao, votos, caminho, vai_participar) VALUES 
  ('$ID_Artista', '$titulo', '$descricao', 0, '$caminho', 1);");
	
  $db->close();

  
?>