<html>
   <head>
      <title>Exemplo Data e Hora</title>
   </head>
   <body bgcolor="#FFFFFF">

   <form action="exercicio1.php" method="POST">
    <label for="timezone">Choose a timezone:</label>
    <select id="timezone" name="timezone">
      <option value="America/Sao_Paulo">America/Sao_Paulo</option>
      <option value="Africa/Cairo">Africa/Cairo	</option>
      <option value="Asia/Seoul">Asia/Seoul</option>
      <option value="Europe/Amsterdam">Europe/Amsterdam	</option>
      <option value="America/Vancouver">America/Vancouver</option>
      <option value="Pacific/Fiji">Pacific/Fiji</option>
    </select>
    <input type="submit">
  </form>


   <table border="1">
      <tr>
         <td>
            <?php
               $tempo = time();  date_default_timezone_set($_POST['timezone']);
               echo("<b>Data e Hora Local:</b><br>");

            ?>
         </td>
      </tr>
      <tr>
         <td>
            <?php
                 echo("<b>Local: </b>".$_POST['timezone']."<br>");
                 echo("<b>Dia da Semana:</b> ".date("l", $tempo)."<br>");
                 echo("<b>Dia do Mes:</b> ".date("d", $tempo)."<br>");
                 echo("<b>Mes:</b> ".date("F", $tempo)."<br>");
                 echo("<b>Ano:</b> ".date("Y", $tempo)."<br>");
                 echo("<b>Hora:</b> ".date(H.":".i, $tempo)."<br>");
              ?>
         </td>
      </tr>
   </table>
   </body>
</html>
