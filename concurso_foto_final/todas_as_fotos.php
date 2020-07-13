<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Concurso de Fotografia</title>
    <!-- Favicon-->

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/todas_as_fotos.css" rel="stylesheet" />
</head>

<body>
   <center>
<?php

    $db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

    $photos= $db->query("SELECT * FROM Photo;");


    while($row = $photos->fetchArray()) {

        $titulo = $row['titulo'];
        $descricao = $row['descricao'];
        $votos = $row['votos'];
        $caminho = $row['caminho'];
        $ID = $row['ID'];

        echo "<h2> Titulo: $titulo</h2>";
        echo "<p> Descricao: $descricao</p>";
        echo " <img src='$caminho' width=200 height=200 >";
        echo "<p><b> ID: $ID <K/b></p>";
        echo "<b> Quantidade de Votos: $votos</b>";

        echo '<form action="/~stefantcleal/concurso_foto_final/votar.php?IDd='.$ID.'" method="get">';
            echo '<button type="submit" name='.$ID.'>Votar</button>';
        echo'</form>';


    }
    $db->close();


?>  

                
    <h2>Coloque aqui a ID da foto que você mais gostou</h2>

<form class="form-signin" action="/~stefantcleal/concurso_foto_final/votar.php">
    <input type="text" name="IDd" id="IDd" class="form-control" placeholder="ID" required="" autofocus="">
    <button class="btn btn-lg btn-primary btn-block" type="submit">
        Submit
    </button>
</form>
</center>
    </header>

    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>