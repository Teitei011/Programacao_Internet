<?php
    session_start();

    $db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

    $ID = $_GET["ID"];

    $query = $db->query( "SELECT * FROM Photo WHERE ID='$ID';");
    $how_many_votes = $query->fetchArray();
    $how_many_votes = $how_many_votes["votos"];

    $how_many_votes = $how_many_votes + 1;
    $db->exec("UPDATE Photo SET votos = $how_many_votes WHERE ID = '$ID';");

    $db->close();


    // header("Location: http://fourier.ifsc.usp.br/~stefantcleal/concurso_foto_final/todas_as_fotos.php", true, 301);

?>