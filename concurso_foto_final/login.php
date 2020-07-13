<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Concurso de Fotografia</title>
    <link href="css/login.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>

<body>

    <?php
        $string = "TEstenkdjsahdkljsa" +  date("Y.m.d");
        $token = sha1($string);

            
        $usuario = $_GET["usuario"];
        $senha = $_GET["senha"];

        $db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

        $result = $db->query("SELECT * FROM Artista WHERE nome='$usuario';");

        $row = $result->fetchArray();
        if ($row['senha'] == sha1($senha)){
            $_SESSION['token'] = $token;
            $_SESSION['artista_id'] = $row["ID"];

            header('adicionar_fotos.php');


            echo "<center><h1>Usuário autorizado</h1>";
            echo "<a href='todas_as_fotos.php'>Clique nesse link para visualizar as fotos!</a>";
            echo "<br><a href='adicionar_fotos.php'>Ou clique para adicionar suas fotos!</a>";

        } else{
            echo "<center><h1>Senha incorreta</h1>";
            echo "<p><a href='login.html'> Clique aqui para tentar novamente</a> </p></center>";
        }

        $db->close();
    ?>
</body>

</html>


