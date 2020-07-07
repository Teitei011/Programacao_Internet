<html>
<body>
  O nome fornecido foi:
  <b>
    <?php $pessoal = $_POST['pessoal']; $familiar = $_POST['familiar'];
    echo($pessoal[0]);
    ?>
  </b>, o e-mail fornecido foi:
  <b>
    <?php
      echo($pessoal[1]);
    ?>
  </b>
    , o nome do pai é:
  <b>
    <?php
      echo($familiar[0]);
      ?>
    </b>
    e o nome da mãe é:
    <b>
      <?php
        echo($familiar[1]);
      ?>
    </b>
</body>
</html>
