<?php  session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>All the photos</title>
    <link href="css/login.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>

<body>


<?php
  
   $db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

   $photos= $db->query("SELECT * FROM Photo;");
   

   while($row = $photos->fetchArray()) {
       
        $titulo = $row['titulo'];
        $descricao = $row['descricao'];
        $votos = $row['votos'];
        $caminho = $row['caminho'];

        echo "<center><h2> Titulo: $titulo</h2></center>";
        echo "<center><p> Descricao: $descricao</p></center>";
        echo "<center><b> Quantidade de Votos: $votos</b></center>";
        echo "<center><h1> Caminho da foto: $caminho</center></h1>";
        echo "<center> <img src='$caminho' width=200 height=200 ></center>";
   }
   $db->close();
   

?>