<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link href="css/login.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Concurso de Fotografia</title>
</head>

<html>

<body>
  <div class="container">
    <form action="add_2_database.php" method="GET">
      <p>Concurso a que pertence:

        <select name="concurso">
          <option value="0" selected>Natureza</option>
          <option value="1">Pessoas</option>
          <option value="2">Outros</option>
        </select>
      </p>
      
      Título: <input type="text" name=titulo>
      Descricao: <input type="text" name=descricao>
      <input type="file" name="foto">
      <input type="submit" name="Submit" value="Enviar">

    </form>
  </div>
</body>

</html>