<html>
<body>

<center> <h1>Número de Usuários Conectados ao Servidor</h1>
  <p>
    Número: <?php system('who | wc -l', $users_online);?> <br>
</p>
</center>
</body>
</html>
