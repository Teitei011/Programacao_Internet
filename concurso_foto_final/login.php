<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Concurso de Fotografia</title>
</head>
<body  TEXT="#000000" LINK="#0000ff" bgcolor="#FFFFFF">
<BASEFONT SIZE=4>

    <?php
        $string = "TEstenkdjsahdkljsa" +  date("Y.m.d");
        $token = sha1($string);

            
        $usuario = $_GET["usuario"];
        $senha = $_GET["senha"];

        $db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

        $result = $db->query("SELECT senha FROM Artista WHERE nome='$usuario';");

        $row = $result->fetchArray();
        if ($row[0] == sha1($senha)){
            $_SESSION['token'] = $token;
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;


            echo "<center><h1>Usuário autorizado</h1>";
            echo "<a href='todos_os_anuncios.php'>Clique nesse link para visualizar os anuncios!</a>";
            echo "<br><a href='./modificar_anuncios.php'>Ou clique nesse link para adicionar seus anuncios!</a>";

        } else{
            echo "<center><h1>Senha incorreta</h1>";
            echo "<p><a href='login.html'> Clique aqui para tentar novamente</a> </p></center>";
        }

        $db->close();


    ?>

</body>
</html>
