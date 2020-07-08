<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Classificados Virtuais</title>
</head>
<body bgcolor="#C0C0C0" background="images/backclass2.gif">
<h1><em>Classificados</em></h1>
<p>Coloque seu anuncio aqui de <font color="#FF0000"><b>graça</b></font>. Este 
  é um serviço destinado aos internautas que querem vender no mundo <u>REAL</u>, 
  através do mundo <u>VIRTUAL</u>. Participe, coloque a seu classificado aqui. 
  Basta Preencher o formulario abaixo:</p>
<hr>
<form action="classifin2.php" method="GET">
  <p>Classe a que pertence: 
    <select name="classe">
      <option value="1" selected>Carros</option>
      <option value="2">Motos</option>
      <option value="3">Im&oacute;veis</option>
      <option value="4">Inform&aacute;tica</option>
      <option value="5">Eletro-eletr&ocirc;nicos</option>
      <option value="6">diversos</option>
    </select>
  </p>
  <p>Título do Classificado: 
    <input type="text" size="38" name="titulo">
  </p>
    <p>Classificado: </p>   
  <p>
    <textarea name="descricao" rows="6" cols="61"></textarea>
  </p>  
  
    <input type="submit" name="Submit" value="Enviar"> 
  </p> 
</form>



<p>&nbsp;</p>



<p>&nbsp;</p>

</body>

</html>

