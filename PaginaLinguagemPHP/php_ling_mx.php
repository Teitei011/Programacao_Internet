<!DOCTYPE html>
<html lang="en">
  <?php $urlrodando = "http://fourier.ifsc.usp.br/~fabio/exerciciosPHP/"  ?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Programação Voltada a Internet - IFSC - USP - Odemir Bruno - turma 2020</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">PVI</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="exercicios.html">Exercícios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/post_html_bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>PHP</h1>
            <h2 class="subheading">Hypertext Preprocessor - básico 1</h2>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 mx-auto">

          <h2 class="section-heading">Exemplos de introdução à linguagem PHP:</h2><br>
		<h3>Exemplo 27:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_27.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_27.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>$urlrodando
                <iframe src="<?php echo $urlrodando."lingPHP/2_27.php";?>" height="400" width="600"></iframe>
                <br><br>

                <h3>Exemplo 28:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_28.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_28.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_28.php";?>" height="400" width="600"></iframe>
                <br><br>

                <h3>Exemplo 29:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_29.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_29.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_29.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 30:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_30.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_30.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_30.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 31:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_31.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_31.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_31.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 32:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_32.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_32.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_32.php";?>" height="400" width="600"></iframe>

                <br><br>

		 <h3>Exemplo 33:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_33.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_33.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_33.php";?>" height="400" width="600"></iframe>

                <br><br>


		<h3>Exemplo 34:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_34.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_34.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_34.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 35:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_35.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_35.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_35.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 36:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_36.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_36.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_36.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 37:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_37.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_37.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_37.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 38:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_38.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_38.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_38.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 39:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_39.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_39.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_39.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 40:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_40.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_40.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_40.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 41:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_41.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_41.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_41.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 42:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_42.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_42.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_42.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 43:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_43.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_43.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_43.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 44:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_44.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_44.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_44.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 45:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_45.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_45.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_45.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 46:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_46.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_46.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_46.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 47:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_47.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_47.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_47.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 48:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_48.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_48.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_48.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 49:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_49.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_49.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_49.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 50:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_50.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_50.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_50.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 51:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_51.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_51.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_51.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 52:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_52.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_52.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_52.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 53:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_53.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_53.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_53.php";?>" height="400" width="600"></iframe>

                <br><br>

          	<h3>Exemplo 54:</h3>
      		<?php
      		echo "<xmp>";
     		   $myfile = fopen("lingPHP/2_54.php", "r") or die("Unable to open file!");
      		echo fread($myfile,filesize("lingPHP/2_54.php"));
      		fclose($myfile);
     		echo "</xmp>";
      		?>
      		<h4>Rodando:</h4>
          <iframe src="<?php echo $urlrodando."lingPHP/2_54.php";?>" height="400" width="600"></iframe>

      		<br><br>

          	<h3>Exemplo 55:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_55.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_55.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_55.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 56:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_56.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_56.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_56.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 57:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_57.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_57.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_57.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 58:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_58.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_58.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_58.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 59:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_59.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_59.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_59.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 60:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_60.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_60.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_60.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 61:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_61.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_61.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_61.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 62:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_62.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_62.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_62.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 63:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_63.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_63.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_63.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 64:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_64.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_64.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_64.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 65:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_65.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_65.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_65.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 66:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_66.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_66.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_66.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 67:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_67.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_67.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_67.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 68:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_68.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_68.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_68.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 69:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_69.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_69.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_69.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 70:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_70.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_70.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_70.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 71:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_71.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_71.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_71.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 72:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_72.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_72.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_72.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 73:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_73.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_73.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_73.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 74:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_74.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_74.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_74.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 75:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_75.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_75.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_75.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 76:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_76.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_76.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_76.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 77:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_77.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_77.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_77.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 78:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_78.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_78.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_78.php";?>" height="400" width="600"></iframe>

                <br><br>

                <h3>Exemplo 79:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_79.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_79.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_79.php";?>" height="400" width="600"></iframe>
                <br><br>

                <h3>Exemplo 80:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_80.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_80.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_80.php";?>" height="400" width="600"></iframe>

                <br><br>

		<h3>Exemplo 81:</h3>
                <?php
                echo "<xmp>";
                $myfile = fopen("lingPHP/2_81.php", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("lingPHP/2_81.php"));
                fclose($myfile);
                echo "</xmp>";
                ?>
                <h4>Rodando:</h4>
                <iframe src="<?php echo $urlrodando."lingPHP/2_81.php";?>" height="400" width="600"></iframe>

	        <br>

        </div>
      </div>
    </div>
  </article>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
