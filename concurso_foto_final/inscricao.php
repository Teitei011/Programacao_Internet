<?php
    session_start();
    echo "<center>";
    $string = "TEstenkdjsahdkljsa" +  date("Y.m.d");
    $token = sha1($string);
    $_SESSION['token'] = $token;
    
  
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $senha = $_GET["senha"];
    $telefone = $_GET["telefone"];

    $db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

    $senhaCriptografada = sha1($senha);

    $db->exec("INSERT INTO Anunciante (nome, email, senha, telefone) VALUES ('$nome', '$email', '$senhaCriptografada', '$telefone');");
    $db->close();
?> 


<html>
<head><title>Inscrição</title></head>

<body background="images/backclass1.gif" bgcolor="#FFFFFF"
  vlink="#FF0000" alink="#FF00FF" leftmargin="25">
    <center><h1> Inscrição efetuada com sucesso!</h1>

    <p> Dados registrados: </p>
    
    <?php
      echo "<p>Nome: $nome</p>";
      echo "<p>Email: $email</p>";
      echo "<p>Senha: $senhaCriptografada</p>";
      echo "<p>Telefone: $telefone</p>";
    ?>

    <p><a href="index.html">Clique aqui para voltar ao menu inicial</a></p> </center>
</body>
</html>
