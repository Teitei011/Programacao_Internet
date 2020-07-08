<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Classificados - home page</title>
</head>
<body  TEXT="#000000" LINK="#0000ff" bgcolor="#FFFFFF">
    <BASEFONT SIZE=4>
    <center>
        <?php 

            $db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
            
            $classe = $_GET["classe"];
            $result = $db->query("SELECT * FROM Anuncio;"); #WHERE classe='$classe' 

            while($row = $result->fetchArray()) {
                echo "<p><hr><h2><b><I>".$row["titulo"]."</i></b></h2><br>";
                echo "<p>".$row["descricao"]."</p><br>";
            }

            $db->close();

        ?>
    </center>
</body>
</html>
