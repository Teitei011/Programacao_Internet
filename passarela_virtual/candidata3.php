<html>
<body bgcolor="#FFFFFF">
<?php
   $cand_id = fopen("3.php","r");
   $n_votos = fread($cand_id,12);
   fclose($cand_id);
   $n_votos++;
   $cand_id = fopen("3.php","w");
   fwrite($cand_id,$n_votos);
   fclose($cand_id);
?>
      Obrigado por votar numa de nossas beldades<br><br>
<a href="passaini.htm">Voltar</a>
   </body>
</html>