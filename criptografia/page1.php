<?php include 'verify_user.php';?>


<!DOCTYPE html>
<html>
<body>

<?php
    echo "<center>";

 
    $_SESSION['MeuSite']['nomeUsuario'] = "Seu zé";
    $_SESSION['MeuSite']['compras'][1] = "carro";
    $_SESSION['MeuSite']['compras'][2] = "casa";
    $_SESSION['MeuSite']['compras'][3] = "barco";

    echo "<p>Nome = $nome</p>";
    echo "<p>Item 1 de compra = $compra1</p>";
    echo "<p>Item 2 de compra = $compra2</p>";
    echo "<p>Item 3 de compra= $compra3</p>";

    
    
?>
    <p> <a href="page2.php">Vá para a página 2</a> </p> 

    </center>

</body>
</html>	
