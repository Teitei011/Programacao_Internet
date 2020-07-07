<html>
<body>
  O nome fornecido foi:
  <b>
    <?php
      $pessoal = $_POST['pessoal']; $familiar = $_POST['familiar'];
      echo($pessoal["nome"]);
    ?>
    </b>
    , o e-mail fornecido foi:
    <b>
    <?php
      echo($pessoal["email"]);
    ?>
    </b>
    , o nome do pai é:
    <b>
      <?php
        echo($familiar["pai"]);
      ?>
    </b>
      e o nome da mãe é:
      <b>
      <?php
        echo($familiar["mae"]);
      ?>
        </b>
</body>
</html>
