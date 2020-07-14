<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />

  <title>Classificados</title>  
</head>

<body background="images/backclass1.gif" bgcolor="#FFFFFF"
  vlink="#FF0000" alink="#FF00FF" leftmargin="25">
  <center>
  <?php 

  $db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
  
  $person = $db->query("SELECT * FROM Anunciante");



  while($column = $person->fetchArray()) {
    echo "<hr>";
    echo "<center>";

    echo "<h1>ID: ".$column["ID"]."</h1>";
    echo "<p>Nome: ".$column["nome"]."</p>";
    echo "<p>Email: ".$column["email"]."</p>";
    echo "<p>Telefone: ".$column["telefone"]."</p>";
    echo "</center>";

    $ID_ANUNCIANTE = $column["ID"];

    $result = $db->query("SELECT * FROM Anuncio WHERE Anunciante = ".$ID_ANUNCIANTE.";");
    echo "<h2> Anuncios: </h2>";
    while($row = $result->fetchArray()){
      echo "<p><h3><b><I><center> ".$row["titulo"]."  -- ID: ".$row["ID"]."</center></i></b></h3><br>";
      echo "<p>".$row["descricao"]."</p><br>";
  

      $ID = $row["ID"];
      echo "<form action='./delete_anuncios.php method='GET'>";
      echo'<input type="hidden" name="ID" id="ID" value="'.$ID.'" required="" autofocus="">';
      echo "<p> <input type='submit' value='Delete'> </p></form>";

      echo "<form action='./edit_one_anuncio.php?ID=$ID' method='GET'>";
      echo'<input type="hidden" name="ID" id="ID" value="'.$ID.'" required="" autofocus="">';
      echo "<p> <input type='submit' value='Edit'> </p></form>";
 
    }
  
  }
  echo "<hr>";

  $db->close();

  
?>


  </center>    
</body>

</html>