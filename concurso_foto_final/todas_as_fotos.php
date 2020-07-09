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

        echo "<center><h2> Titulo: '$titulo'</h2></center>";
        echo "<center><p> '$descricao'</p></center>";
        echo "<center><b> '$votos'</b></center>";
        echo "<center> <img src='$caminho'></center>";
   }
   $db->close();
   

?>