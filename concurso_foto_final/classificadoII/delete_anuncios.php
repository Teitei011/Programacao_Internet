<?php 
    session_start();
      
    $db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
    $ID = $_GET["ID"];

    $db->exec("DELETE FROM Anuncio WHERE ID=$ID;");
    $db->close();


   header("Location: http://fourier.ifsc.usp.br/~stefantcleal/classificadoII/modificar_anuncios.php")

?>