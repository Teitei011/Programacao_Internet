<?php
   echo("<html>\n<title>Concurso de Fotografia</title>\n<head>\n<center>\n");
   echo("<h1>Bem vindo ao Concurso de Fotografia do IFSC</h1>\n");
   echo("<h3>Conheca nossos fotos e de o seu voto!</h3>\n");
   echo("<script>\n");
   echo("<!--- \n");
   echo("function NovaJanela(fig) {\n");
   echo("   window.open(fig,'passarela');\n");
   echo("   }\n");
   echo("--->\n");
   echo("</script>\n");
   echo("</head><body bgcolor=\"#FFFFFF\">");
   
   $db = new SQLite3('database.db');

   $artists = $db->query("SELECT * FROM Artist");

   while($row = $artists->fetchArray()) {
      echo "id: " . $row["ID"]. " <br> Name: " . $row["name"]. " <br> Email: " . $row["email"]. "<br><br><br>";

      $text = "SELECT * FROM Photo WHERE id_artist = ". $row["ID"];
      $photos = $db->query($text); 

      while($column = $photos->fetchArray()) {
         echo "<img src=".$column["filename"]."> <br>";
         echo 
            "<form action='./votar.php' method="."'GET'>
               <button name='voto' id="$column['ID']."type='button'>Selecione essa foto!</button>
               <input type='submit'>
            </form>";
      }
   }
      

   echo("</body></center></html>");

   $db->close();

?>
