<?php
    $db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

    $votacao = $_GET["voto"];

    $how_many_votes = $db->query( "SELECT Votes from Photos WHERE ID='$votacao';");
    $how_many_votes = $how_many_votes->fetch_array();

    $how_many_votes = $how_many_votes + 1;
    $db->exec("UPDATE Photo SET votos = $how_many_votes WHERE ID = '$votacao';");

    $db->close();


echo "<html>";
   echo "<head> <title>Concurso de Fotografia IFSC</title></head>";

   echo "<body>";
   echo"      <center> ";
   echo"      <h1> <b>Obrigado por votar em nosso concurso! </b></h1>";
         
   echo"   </center>";
   echo"<a href='passaini.html'>Volte para votar mais!</a>";
   echo"</body>";
   echo "</html>";
?>