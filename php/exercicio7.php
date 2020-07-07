<html>
   <head>
      <title>Camisas</title>
   </head>
   <body bgcolor="#FFFFFF">
   Digite seu nome ou apelido, o n�mero da sua camisa e clique em "Costurar".<br>
      <form action="camisas.php" method="POST">
         Nome/Apelido: <input type="text" name="nome" value=""><br><br>
         Camisa: <select name="camisa">
            <option value="10" selected>10</option>
            <option value="11">11</option>
            <option value="9">9</option>
            <option value="8">8</option>
            <option value="7">7</option>
            <option value="6">6</option>
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
         </select><br><br>
         Time: <select name="time">
            <option value="corint">Corinthians</option>
            <option value="palmei">Palmeiras</option>
         </select><br><br><br>
         <input type="submit" value="Costurar!">
      </form>
   </body>
</html>
