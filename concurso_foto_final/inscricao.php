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
  $db->exec("INSERT INTO Artista (nome, email, senha) VALUES ('$name', '$email', '$senhaCriptografada';");
  $db->close();
?> 


<html>
<head><title>Inscrição</title></head>

<body background="assets/img/backclass1.gif" bgcolor="#FFFFFF"
  vlink="#FF0000" alink="#FF00FF" leftmargin="25">
    <center><h1> Inscrição efetuada com sucesso!</h1>

    <p> Dados registrados: </p>
    
    <?php
      echo "<p>Nome: $nome</p>";
      echo "<p>Email: $email</p>";
      echo "<p>Senha: $senhaCriptografada</p>";
    ?>

    <p><a href="index.html">Clique aqui para voltar ao menu inicial</a></p> </center>
</body>
</html>
