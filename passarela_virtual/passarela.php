<?php
   echo("<html>\n<title>Passarela Virtual</title>\n<head>\n<center>\n");
   echo("<h1>Bem vindo à Passarela Virtual</h1>\n");
   echo("<h3>Conheça nossas candidatas e dê o seu voto!</h3>\n");
   echo("<script>\n");
   echo("<!--- \n");
   echo("function NovaJanela(fig) {\n");
   echo("   window.open(fig,'passarela');\n");
   echo("   }\n");
   echo("--->\n");
   echo("</script>\n");
   echo("</head><body bgcolor=\"#FFFFFF\">");
   if (!file_exists("inscricao.txt")) echo("Ainda não existem cadidatas inscritas. Volte mais tarde.");
   else {
      $tmp = file("inscricao.txt");
      $idx = 1;
      foreach($tmp as $linha) {
         if ($linha=="<br>\n") {
            $cand_id = fopen("$idx.php","r");
            $n_votos = fread($cand_id,12);
            fclose($cand_id);
            echo("<br>Votos Recebidos até o momento: ".$n_votos."\n");
            $idx++;
            }
         else echo($linha);
         }
      echo("</body></center></html>");
   }
?>