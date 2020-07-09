<?php
   session_start();

   $db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

   $photos= $db->query("SELECT * FROM Photo;");
   

   while($row = $photos->fetchArray()) {
       
        $titulo = $row['titulo'];
        $descricao = $row['descricao'];
        $votos = $row['votos'];
        $caminho = $row['caminho'];

        echo "<center><h2> '$titulo'</h2></center>";
        echo "<center><p> '$descricao'</p></center>";
        echo "<center><b> '$votos'</b></center>";
        echo "<center> <img src='$caminho'></center>";
   }
   $db->close();
   

?>