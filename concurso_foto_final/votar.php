<?php
    $db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

    $votes = $_GET["voto"];

    $text1 = "SELECT Votes from Photos WHERE ID=".$votes;

    $how_many_votes = $db->query($how_many_votes);
    $how_many_votes++;

    $vote_update = "UPDATE Photo SET Votes = $how_many_votes WHERE ID =" . $votes;
    $db->query($vote_update);

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