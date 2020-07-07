<?php
    session_start();

    $string = "TEstenkdjsahdkljsa" +  date("Y.m.d");
    $token = sha1($string);
    

    if ($token == $_SESSION['token']){
 
      $titulo = $_GET["titulo"];
      $descricao = $_GET["descricao"];

      $db = new SQLite3('database.db');

      $id_anunciante = $db->query('SELECT ID FROM Anunciante WHERE nome='$usuario';');
      
      $db->exec("INSERT INTO  Anuncio (ANUNCIANTE, titulo, descricao) VALUES ('$id_anunciante', '$titulo', '$descricao')");
      $db->close();

      } else{
        echo "<center><h1> Vc não tem autorização de modificar os anuncios</h1></center>"
    }
    
?>


<html>
<head><title>Anuncio</title></head>

<body background="images/backclass1.gif" bgcolor="#FFFFFF"
  vlink="#FF0000" alink="#FF00FF" leftmargin="25">
    <center><h1> Anuncio adicionado com sucesso! </h1></center>
    <p> Clique aqui para ir a página de anuncios <a href="classifout2.php"></p>
</body>
</html>