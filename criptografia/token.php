<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
    echo "<center>";
    $string = "TEstenkdjsahdkljsa" +  date("Y.m.d");
    $token = sha1($string);
    
 
    $_SESSION['MeuSite']['nomeUsuario'] = "Seu zé";
    $_SESSION['MeuSite']['compras'][1] = "carro";
    $_SESSION['MeuSite']['compras'][2] = "casa";
    $_SESSION['MeuSite']['compras'][3] = "barco";
    $_SESSION['token'] = $token;
    $_SESSION['Tempo'] = time();

    echo "<p>Nome = $nome</p>";
    echo "<p>Item 1 de compra = $compra1</p>";
    echo "<p>Item 2 de compra = $compra2</p>";
    echo "<p>Item 3 de compra= $compra3</p>";

    
    
?>
    <p> <a href="token2.php">Vá para a página 2</a> </p> 

    </center>

</body>
</html>	
