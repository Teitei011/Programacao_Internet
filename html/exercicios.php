<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $urlrodando="http://fourier.ifsc.usp.br/~stefantcleal/exerciciosPHP/"
    ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Exercícios</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="../css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('../images/exercises.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>Exercícios</h1>
            <h2 class="subheading">Exercícios sobre o assunto das classes</h2>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          <div class="post-preview">
            <h2 class="post-title">
              BootStrap Exercícios:
            </h2>
            <ol>
              <li> <p> Faça uma página usando 4 ou 5 elementos de bootstrap<p>
                <a href="segundo_bootstrap.html"><b>Resolução</b></a> </li>

              <li> <p>Altere o template:&nbsp;<a href="https://startbootstrap.com/previews/landing-page/">startbootstrap</a> para uma página sua.</li></p> </li>
                <a href="terceiro_bootstrap.html"><b>Resolução</b></a> </li>
            <p></p>
            <p><li>Escolha 3 templates de&nbsp;<a href="https://startbootstrap.com/">StartBootstrap</a>&nbsp; e altere personificando com seu conteúdo.</li></p>
              <ol>
                <li> <a href="quarto_bootstrap.html"><b>Primeiro Template</b></a> </li>
                <li> <a href="quinto_bootstrap.html"><b>Segundo Template</b></a> </li>
                <li> <a href="sexto_bootstrap.html"><b>Terceiro Template</b></a> </li> </ol>
          </ol>

          <h2 class="post-title">
            CGI-BIN Exercícios:
          </h2>
          <ol>
            <li> <p> Faça um contador de visitas na página </p> <a href="../cgi-bin/exercicio1.cgi"><b>Resolução</b></a>
                          <?php
                          echo "<xmp>";
                          $myfile = fopen("../cgi-bin/exercicio1.cgi", "r") or die("Unable to open file!");
                          echo fread($myfile,filesize("../cgi-bin/exercicio1.cgi"));
                          fclose($myfile);
                          echo "</xmp>";
                          ?>
                          <h4>Rodando:</h4>$urlrodando
                          <iframe src="../cgi-bin/exercicio1.cgi" height="400" width="600"></iframe>
                          <br><br>
            </li>
            <li> <p> Faça uma página que apresenta qual é o horário no servidor </p> <a href="../cgi-bin/exercicio2.cgi"><b>Resolução</b></a>
              <?php
              echo "<xmp>";
              $myfile = fopen("../cgi-bin/exercicio2.cgi", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("../cgi-bin/exercicio2.cgi"));
              fclose($myfile);
              echo "</xmp>";
              ?>
              <h4>Rodando:</h4>$urlrodando
              <iframe src="../cgi-bin/exercicio2.cgi" height="400" width="600"></iframe>
              <br><br>

            </li>
            <li> <p> Faça uma página que apresenta o quanto do processador do servidor está sendo utilizado, mostrando a porcentagem em cada um dos núcleos do servidor </p> <a href="../cgi-bin/exercicio3.cgi"><b>Resolução</b></a>
              <?php
              echo "<xmp>";
              $myfile = fopen("../cgi-bin/exercicio3.cgi", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("../cgi-bin/exercicio3.cgi"));
              fclose($myfile);
              echo "</xmp>";
              ?>
              <h4>Rodando:</h4>$urlrodando
              <iframe src="../cgi-bin/exercicio3.cgi" height="400" width="600"></iframe>
              <br><br></li>
            <li> <p> A quanto tempo o servidor está ligado em dias, horas, minutos e segundos? </p> <a href="../cgi-bin/exercicio4.cgi"><b>Resolução</b></a>
              <?php
              echo "<xmp>";
              $myfile = fopen("../cgi-bin/exercicio4.cgi", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("../cgi-bin/exercicio4.cgi"));
              fclose($myfile);
              echo "</xmp>";
              ?>
              <h4>Rodando:</h4>$urlrodando
              <iframe src="../cgi-bin/exercicio4.cgi" height="400" width="600"></iframe>
              <br><br>
            </li>

            <li> <p> Faça uma página em que o usuário informa um diretório e o servidor retorna a listagem. </p> <a href="listagem.html"><b>Resolução</b></a>
              <?php
              echo "<xmp>";
              $myfile = fopen("../cgi-bin/exercicio6.cgi", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("../cgi-bin/exercicio6.cgi"));
              fclose($myfile);
              echo "</xmp>";
              ?>
              <h4>Rodando:</h4>$urlrodando
              <iframe src="listagem.html" height="400" width="600"></iframe>
              <br><br>
            </li>

            <li> <p> Faça uma página em que o usuário informa um dominío, exemplo, www.ifsc.usp.br e o servidor retorna o endereço ip do servidor.</p> <a href="ping_server.html"><b>Resolução</b></a>
              <?php
              echo "<xmp>";
              $myfile = fopen("../cgi-bin/ping_server.cgi", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("../cgi-bin/ping_server.cgi"));
              fclose($myfile);
              echo "</xmp>";
              ?>
              <h4>Rodando:</h4>
              <!-- <iframe src="ping_server.html" height="400" width="600"></iframe> -->
              <br><br>
            </li>


          </ol>
        </div>
          <h2 class="post-title">
            PHP Exercícios:
          </h2>

          <ol>
            <li> <p>Faça uma versão iterativa do programa, onde é apresenta um formulário apresentando algumas cidades. A data e hora devem ser apresentadas segunda a hora local, correspondente a cidade escolhida.</p>  <a href="#"></a><b> Resolução</b>
              <?php
              echo "<xmp>";
              $myfile = fopen("../php/exercicio1.php", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("../php/exercicio1.php"));
              fclose($myfile);
              echo "</xmp>";
              ?>
              <h4>Rodando:</h4>
              <iframe src="../php/exercicio1.php" height="400" width="600"></iframe>
              <br><br>

            </li>

            <li> <p> Número de Usuários Conectados ao Servidor</p>
              <?php
              echo "<xmp>";
              $myfile = fopen("../php/exercicio2.php", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("../php/exercicio2.php"));
              fclose($myfile);
              echo "</xmp>";
              ?>
              <h4>Rodando:</h4>
              <iframe src="../php/exercicio2.php" height="400" width="600"></iframe>
              <br><br>
            </li>

            <li> <p> Cálculo de Peso Ideal</p>
              <?php
              echo "<xmp>";
              $myfile = fopen("../php/exercicio3.php", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("../php/exercicio3.php"));
              fclose($myfile);
              echo "</xmp>";
              ?>
              <h4>Rodando:</h4>
              <iframe src="../php/exercicio3.php" height="400" width="600"></iframe>
              <br><br>
            </li>


            <li> <p> Numerologia</p>
              <?php
              echo "<xmp>";
              $myfile = fopen("../php/exercicio4.php", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("../php/exercicio4.php"));
              fclose($myfile);
              echo "</xmp>";
              ?>
              <h4>Rodando:</h4>
              <iframe src="../php/exercicio4.php" height="400" width="600"></iframe>
              <br><br>
            </li>

            <li> <p> Distância entre cidades</p>
              <?php
              echo "<xmp>";
              $myfile = fopen("../php/exercicio5.php", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("../php/exercicio5.php"));
              fclose($myfile);
              echo "</xmp>";
              ?>
              <h4>Rodando:</h4>
              <iframe src="../php/exercicio5.php" height="400" width="600"></iframe>
              <br><br>
            </li>


            <li> <p>  Informações do usuário</p>
              <?php
              echo "<xmp>";
              $myfile = fopen("../php/exercicio6.php", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("../php/exercicio6.php"));
              fclose($myfile);
              echo "</xmp>";
              ?>
              <h4>Rodando:</h4>
              <iframe src="../php/exercicio6.php" height="400" width="600"></iframe>
              <br><br>
            </li>


            <li> <p>  Manipulação de imagens</p>
              <?php
              echo "<xmp>";
              $myfile = fopen("../php/camisas.php", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("../php/camisas.php"));
              fclose($myfile);
              echo "</xmp>";
              ?>
              <h4>Rodando:</h4>
              <iframe src="../php/exercicio7.php" height="400" width="600"></iframe>
              <br><br>
            </li>


            <li> <p>  Enquete</p>
              <?php
              echo "<xmp>";
              $myfile = fopen("../php/votar.php", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("../php/votar.php"));
              fclose($myfile);
              echo "</xmp>";
              ?>
              <h4>Rodando:</h4>
              <iframe src="../php/enquete.html" height="400" width="600"></iframe>
              <br><br>
            </li>
</ol>
      <ol>         <h2 class="post-title">
            Criptografia e SQLite3:
          </h2> 

            <li> <p>  Criptografia</p>
              <?php
              echo "<xmp>";
              $myfile = fopen("../criptografia/hash.php", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("../criptografia/hash.php"));
              fclose($myfile);
              echo "</xmp>";
              ?>
              <h4>Rodando:</h4>
              <iframe src="../criptografia/hash.php" height="400" width="600"></iframe>
              <br><br>
            </li>

            <li> <p>  Token e Session</p>
              <?php
              echo "<xmp>";
              $myfile = fopen("../criptografia/token.php", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("../criptografia/token.php"));
              fclose($myfile);
              echo "</xmp>";
              ?>
              <h4>Rodando:</h4>
              <iframe src="../criptografia/token.php" height="400" width="600"></iframe>
              <br><br>
            </li>

            <li> <p>  Include</p>
              <?php
              echo "<xmp>";
              $myfile = fopen("../criptografia/verify_user.php", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("../criptografia/verify_user.php"));
              fclose($myfile);
              echo "</xmp>";

              echo "<h3>Page 1</h3>";
              echo "<xmp>";
              $myfile = fopen("../criptografia/page1.php", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("../criptografia/page1.php"));
              fclose($myfile);
              echo "</xmp>";

              echo "<h3>Page 2</h3>";
              echo "<xmp>";
              $myfile = fopen("../criptografia/page2.php", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("../criptografia/page2.php"));
              fclose($myfile);
              echo "</xmp>";

              ?>
              <h4>Rodando:</h4>
              <iframe src="../criptografia/page1.php" height="400" width="600"></iframe>
              <br><br>
            </li>


            <h2 class="post-title">
            Processing.js:
          </h2> 

          <li> <p>  Primeiro pde</p>
              <?php
              echo "<xmp>";
              $myfile = fopen("../ProcessingJS/circuferencia.pde", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("../ProcessingJS/circuferencia.pde"));
              fclose($myfile);
              echo "</xmp>";
              ?>
              <h4>Rodando:</h4>
              <iframe src="../ProcessingJS/anything.html" height="400" width="600"></iframe>
              <br><br>
            </li>

            <li> <p>  Segundo pde</p>
              <?php
              echo "<xmp>";
              $myfile = fopen("../ProcessingJS/celular_ou_pc.html", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("../ProcessingJS/celular_ou_pc.html"));
              fclose($myfile);
              echo "</xmp>";
              ?>
              <h4>Rodando:</h4>
              <iframe src="../ProcessingJS/celular_ou_pc.html" height="400" width="600"></iframe>
              <br><br>
            </li>


            <h2 class="post-title">
              Implementação de Varias Coisas
            </h2> 

          <li> <p>  Classificados </p>
              <h4>Rodando:</h4>
              <iframe src="../classificadoII/" height="600" width="600"></iframe>
              <br><br>
            </li>


          </ol>
          </ol>
        </div>
      </div>
    </div>
  </article>

  <hr>



</body>

</html>
