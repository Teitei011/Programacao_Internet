<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />

  <title>Classificados</title>  
</head>

<body background="images/backclass1.gif" bgcolor="#FFFFFF"
  vlink="#FF0000" alink="#FF00FF" leftmargin="25">

  <?php 

  $db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
  
  $nome = $_SESSION['usuario'];
  echo "<center><h1> Usuário: $nome </h1>";
  ?>
  <form action="./classform2.php" method="GET">
     <input type="submit" name="new" value="Adicionar mais um anuncio">
  </form>


  
  <?php 
  echo "<center>";  
  $person = $db->query("SELECT * FROM Anunciante WHERE nome='$nome';");



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

      echo "<form action='./delete_anuncios.php' method='POST'>
            <p> <input type='submit' value='Delete'> </p>
          </form>";

      echo "<form action='./edit_one_anuncio.php' method='POST'>
      <p> <input type='submit' name='ID' value=Edit> </p>
          </form>";
    }
  }
  echo "<hr>";

  $db->close();
?>

  <center> <h2> Excluir </h2>
  <form action="./delete_anuncios.php" method="GET"> 
    ID: <input type="text" name="ID"><br>
    <input type='submit'>
  </form>

  <h2>Editar </h2>
  <form action="./edit_one_anuncio.php" method="GET"> 
      ID: <input type="text" name="ID"><br>
      <input type='submit'>
  </form>

  

  </center>


</body>

</html>