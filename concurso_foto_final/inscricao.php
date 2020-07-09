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
?> 


<html>
<head><title>Inscrição</title></head>

<body>
    <center><h1> Inscrição efetuada com sucesso!</h1>

    <p> Dados registrados: </p>
    
    <?php
      echo "<p>Nome: $name</p>";
      echo "<p>Email: $email</p>";
      echo "<p>Senha: $senhaCriptografada</p>";
    ?>

    <p><a href="adicionar_fotos.php">Clique aqui para adicionar as suas fotos</a></p> </center>
</body>
</html>
