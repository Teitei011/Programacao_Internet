<?php
   $nome = $_POST['nome'];
   $idade = $_POST['idade'];
   $email = $_POST['email'];
   $titulo = $_POST['titulo'];
   $descricao = $_POST['descricao'];
   $foto1_name = $_FILES['foto1']['tmp_name']; $foto1 = $_FILES['foto1']['name'];
   $foto2_name = $_FILES['foto2']['tmp_name']; $foto2 = $_FILES['foto2']['name'];
   $foto3_name = $_FILES['foto3']['tmp_name']; $foto3 = $_FILES['foto3']['name'];
   $foto4_name = $_FILES['foto4']['tmp_name']; $foto4 = $_FILES['foto4']['name'];
   $foto5_name = $_FILES['foto5']['tmp_name']; $foto5 = $_FILES['foto5']['name'];
   $foto6_name = $_FILES['foto6']['tmp_name']; $foto6 = $_FILES['foto6']['name'];
   $foto7_name = $_FILES['foto7']['tmp_name']; $foto7 = $_FILES['foto7']['name'];
   $foto8_name = $_FILES['foto8']['tmp_name']; $foto8 = $_FILES['foto8']['name'];
   $foto9_name = $_FILES['foto9']['tmp_name']; $foto9 = $_FILES['foto9']['name'];
   $foto10_name = $_FILES['foto10']['tmp_name']; $foto10 = $_FILES['foto10']['name'];

   if (empty($nome) or empty($idade) or empty($altura) or empty($email) or empty($titulo) or empty($foto1_name) or empty($foto2_name) or empty($foto3_name) or empty($foto4_name)) { ?>
      <html>
         <title>Passarela</title>
         <body bgcolor="#FFFFFF">
            O preenchimento de TODOS os campos do formul�rio de inscri��o � obrigat�rio. Por favor, <a href="javascript:history.back(1)">volte</a> e verifique seus dados.
         </body>
      </html>
      <? } else {

         $tmp = $foto2_name;
         move_uploaded_file($tmp, $foto2);
         $tmp = $foto3_name;
         move_uploaded_file($tmp, $foto3);
         $tmp = $foto4_name;
         move_uploaded_file($tmp, $foto4);
         $tmp = $foto5_name;
         move_uploaded_file($tmp, $foto5);
         $tmp = $foto6_name;
         move_uploaded_file($tmp, $foto6);
         $tmp = $foto7_name;
         move_uploaded_file($tmp, $foto7);
         $tmp = $foto8_name;
         move_uploaded_file($tmp, $foto8);
         $tmp = $foto9_name;
         move_uploaded_file($tmp, $foto9);
         $tmp = $foto10_name;
         move_uploaded_file($tmp, $foto10);

         $db = new SQLite3("database.db");

         $db->query("INSERT INTO Artist (name, email, age) VAlUES ($name, $email, $age)");

         $id_artist = db->query("SELECT last_insert_rowid()");
         $db->query("INSERT INTO Photo (id_artist, name, description, filename) VALUES ($id_artist, $titulo, $descricao, $foto1_name)");
         $db->query("INSERT INTO Photo (id_artist, name, description, filename) VALUES ($id_artist, $titulo, $descricao, $foto2_name)");
         $db->query("INSERT INTO Photo (id_artist, name, description, filename) VALUES ($id_artist, $titulo, $descricao, $foto3_name)");
         $db->query("INSERT INTO Photo (id_artist, name, description, filename) VALUES ($id_artist, $titulo, $descricao, $foto4_name)");
         $db->query("INSERT INTO Photo (id_artist, name, description, filename) VALUES ($id_artist, $titulo, $descricao, $foto5_name)");
         $db->query("INSERT INTO Photo (id_artist, name, description, filename) VALUES ($id_artist, $titulo, $descricao, $foto6_name)");
         $db->query("INSERT INTO Photo (id_artist, name, description, filename) VALUES ($id_artist, $titulo, $descricao, $foto7_name)");
         $db->query("INSERT INTO Photo (id_artist, name, description, filename) VALUES ($id_artist, $titulo, $descricao, $foto8_name)");
         $db->query("INSERT INTO Photo (id_artist, name, description, filename) VALUES ($id_artist, $titulo, $descricao, $foto9_name)");
         $db->query("INSERT INTO Photo (id_artist, name, description, filename) VALUES ($id_artist, $titulo, $descricao, $foto10_name)");

         $cand = fopen("candidata".$n.".php","w");
         fwrite($cand,"<html>\n<body bgcolor=\"#FFFFFF\">\n");
         fwrite($cand,"<?php\n");
         fwrite($cand,"   \$cand_id = fopen(\"$n.php\",\"r\");\n");
         fwrite($cand,"   \$n_votos = fread(\$cand_id,12);\n");
         fwrite($cand,"   fclose(\$cand_id);\n");
         fwrite($cand,"   \$n_votos++;\n");
         fwrite($cand,"   \$cand_id = fopen(\"$n.php\",\"w\");\n");
         fwrite($cand,"   fwrite(\$cand_id,\$n_votos);\n");
         fwrite($cand,"   fclose(\$cand_id);\n");
         fwrite($cand,"?>\n");
         fwrite($cand,"      Obrigado por votar numa de nossas beldades<br><br>\n");
         fwrite($cand,"<a href=\"passaini.htm\">Voltar</a>\n");
         fwrite($cand,"   </body>\n</html>");
         fclose($cand);

         $arq = fopen("inscricao.txt","a");
         fwrite($arq,"Candidata: <b>".$nome."</b><br>\n");
         fwrite($arq,"Natural de: <b>".$naturalidade."</b><br>\n");
         fwrite($arq,"Idade: <b>".$idade." anos</b><br>\n");
         fwrite($arq,"Altura: <b>".$altura." cm</b><br>\n");
         fwrite($arq,"Prato predileto: <b>".$prato."</b><br>\n");
         fwrite($arq,"Segue/Pretende seguir a carreira de: <b>".$profissao."</b><br>\n");
         fwrite($arq,"Veja as fotografias:<br>\n");
         fwrite($arq,"<a href=\"./$foto1\">".$foto1."</a><br>\n");
         fwrite($arq,"<a href=\"./$foto2\">".$foto2."</a><br>\n");
         fwrite($arq,"<a href=\"./$foto3\">".$foto3."</a><br>\n");
         fwrite($arq,"<a href=\"./$foto4\">".$foto4."</a><br>\n");
         fwrite($arq,"Para votar nesta candidata, clique <a href=\"candidata".$n.".php\">AQUI</a>.\n");
         fwrite($arq,"<br>\n");
         fwrite($arq,"<hr>\n");
         fclose($arq);

         echo("<html>\n<title>Passarela Virtual</title>\n<head>\n<center>\n");
         echo("<h1>Bem vindo � Passarela Virtual</h1>\n");
         echo("<h3>Conhe�a nossas candidatas e d� o seu voto!</h3>\n");
         echo("<script>\n");
         echo("<!--- \n");
         echo("function NovaJanela(fig) {\n");
         echo("   window.open(fig,'passarela');\n");
         echo("}\n");
         echo("--->\n");
         echo("</script>\n");
         echo("</head><body bgcolor=\"#FFFFFF\">");
         $tmp = file("inscricao.txt");
         $idx = 1;
         foreach($tmp as $linha) {
            if ($linha=="<br>\n") {
               $cand_id = fopen("$idx.php","r");
               $n_votos = fread($cand_id,12);
               fclose($cand_id);
               echo("<br>Votos Recebidos at� o momento: ".$n_votos."\n");
               $idx++;
               }
            else echo($linha);
            }
         echo("</body></center></html>");
      }
?>
