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
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Concurso de Fotografia</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">Inscreva-se</h1>
                    <hr class="divider my-4" />
                </div>
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


  }
  $db->close();
  

?>
                
                    <h2>Coloque aqui a ID da foto que você mais gostou</h2>
                
                <form class="form-signin" action="/~stefantcleal/concurso_foto_final/votar.php">
                    <input type="text" name="Id" class="form-control" placeholder="ID" required="" autofocus="">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Submit
                    </button>
                </form>

            </div>
        </div>
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