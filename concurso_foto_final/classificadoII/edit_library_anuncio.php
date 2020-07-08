<?php   session_start(); ?>
<?php

    $db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
    
    $ID = $_SESSION["Anuncio"];    
    $classe = $_GET["classe"];
    $titulo = $_GET["titulo"];
    $descricao = $_GET["descricao"];  
    

    $db->exec("UPDATE Anuncio SET classe = $classe, titulo = '$titulo', descricao = '$descricao' WHERE ID = $ID;");
    $db->close();


    // echo "<p>ID: $ID</p>";
    // echo "<p> Classe:  $classe </p>";
    // echo "<p>Titulo: $titulo </p>";
    // echo "<p>Descricao: $descricao </p>";


   header("Location: http://fourier.ifsc.usp.br/~stefantcleal/classificadoII/modificar_anuncios.php")
?>