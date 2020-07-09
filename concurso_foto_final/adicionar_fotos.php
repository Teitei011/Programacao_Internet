<?php session_abort() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <title>Concurso de Fotografia</title>
</head>

<html>

<body>
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
</body>

</html>