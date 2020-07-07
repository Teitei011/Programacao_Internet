<?php

   $name = $_POST['nome'];
   $email = $_POST['email'];
   $titulo = $_POST['titulo'];
   $descricao = $_POST['descricao'];

   $fotoName1 = $_FILES['foto1']['tmp_name']; $foto1 = $_FILES['foto1']['name']; 
   $fotoName2 = $_FILES['foto2']['tmp_name']; $foto2 = $_FILES['foto2']['name'];
   $fotoName3 = $_FILES['foto3']['tmp_name']; $foto3 = $_FILES['foto3']['name'];
   $fotoName4 = $_FILES['foto4']['tmp_name']; $foto4 = $_FILES['foto4']['name'];
   $fotoName5 = $_FILES['foto5']['tmp_name']; $foto5 = $_FILES['foto5']['name'];
   $fotoName6 = $_FILES['foto6']['tmp_name']; $foto6 = $_FILES['foto6']['name'];
   $fotoName7 = $_FILES['foto7']['tmp_name']; $foto7 = $_FILES['foto7']['name'];
   $fotoName8 = $_FILES['foto8']['tmp_name']; $foto8 = $_FILES['foto8']['name'];
   $fotoName9 = $_FILES['foto9']['tmp_name']; $foto9 = $_FILES['foto9']['name'];
   $fotoName10 = $_FILES['foto10']['tmp_name']; $foto10 = $_FILES['foto10']['name'];
   
   if (empty($nome) or empty($idade) or empty($idade) or empty($email) or empty($titulo) or empty($profissao) or empty($descricao)) { ?> 
      <html>
         <title>Concurso De Fotografia IFSC</title>
         <body bgcolor="#FFFFFF">
            O preenchimento de TODOS os campos do formulário de inscrição é obrigatório. Por favor, <a href="javascript:history.back(1)">volte</a> e verifique seus dados.
         </body>
      </html>
      <? } else {
      
      $db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
      
      $db->query("INSERT INTO Artist (name, email, Votos) VAlUES ($name, $email, 0)");
      $id_artist = $db->query("SELECT last_insert_rowid()");

         # Putting data into database
      for ($i = 1; $i < 11; $i++) {
         $tmp= ${"fotoName$i"};
         move_uploaded_file($tmp, ${"foto$i"});
         $db->query("INSERT INTO Photo (id_artist, name, description, filename) VALUES ($id_artist, $titulo, $descricao, $tmp)");
      }
      $db->close();


   echo "<html>";
   echo "<head> <title>Concurso de Fotografia IFSC</title></head>";

   echo "<body>";
   echo"      <center> ";
   echo"      <h1> <b>Obrigado por se inscrever em nosso concurso! </b></h1>";
         
   echo"   </center>";
   echo"</body>";
   echo "</html>";
?>