<?php
  try{
    session_destroy();
  } catch (Exception $e) {
    // echo 'Caught exception: ',  $e->getMessage(), "\n";
}
  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Classificados Virtuais</title>
</head>
<body bgcolor="#C0C0C0" background="images/backclass2.gif">
<h1><em>Classificados</em></h1>
<p>Coloque seu anuncio aqui de <font color="#FF0000"><b>graça</b></font>. Este 
  é um serviço destinado aos internautas que querem vender no mundo <u>REAL</u>, 
  através do mundo <u>VIRTUAL</u>. Participe, coloque a seu classificado aqui. 
  Basta Preencher o formulario abaixo:</p>
<hr>


<?php 
    $db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
    
    $ID = $_GET["ID"];
    $result = $db->query("SELECT * FROM Anuncio WHERE ID=$ID;");
    $result = $result->fetchArray();

    $classe = $result["classe"];
    $titulo = $result["titulo"];
    $descricao = $result["descricao"];

    $_SESSION["Anuncio"] = $ID;


    $db->close();
?>

<center>
<form action="./edit_library_anuncio.php" method="GET">
<select name="ID">
      <option value=<?php echo $ID ?> selected>ID</option>
    </select>

  <p>Classe a que pertence: 
    <select name="classe">
      <option value="1" selected>Carros</option>
      <option value="2">Motos</option>
      <option value="3">Im&oacute;veis</option>
      <option value="4">Inform&aacute;tica</option>
      <option value="5">Eletro-eletr&ocirc;nicos</option>
      <option value="6">diversos</option>
    </select>

  </p>
  <p>Título do Classificado: 
    <input type="text" size="38" value=<?php echo $titulo;?> name="titulo">
  </p>
    <p>Classificado: </p>   
  <p>
    <textarea name="descricao" rows="6" value=<?php echo $descricao;?>cols="61"></textarea>
  </p>  
 
  <p> 
    <input type="submit" name="Submit" value="Enviar"> 
  </p> 
</form>
  </center>


<p>&nbsp;</p>



<p>&nbsp;</p>

</body>

</html>

