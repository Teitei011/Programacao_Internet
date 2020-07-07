<?php include 'verify_user.php';?>

<!DOCTYPE html>
<html>
<body>

<?php
    $string = "TEstenkdjsahdkljsa" +  date("Y.m.d");
    $token = sha1($string);
    

    if ($token == $_SESSION['token'] or $_SESSION['Tempo'] > time() - 300){
        echo "<center>";
        echo "<b>Autenticação realizada!</b>";
        $nome = $_SESSION['MeuSite']['nomeUsuario'];
        $compra1 = $_SESSION['MeuSite']['compras'][1];
        $compra2 = $_SESSION['MeuSite']['compras'][2];
        $compra3 = $_SESSION['MeuSite']['compras'][3];
        $_SESSION['tempo'] = time();



        

        echo "<p>Nome = $nome</p>";
        echo "<p>Item 1 de compra = $compra1</p>";
        echo "<p>Item 2 de compra = $compra2</p>";
        echo "<p>Item 3 de compra= $compra3</p>";


    }else{
        echo "Token não reconhecido";
    }
    
?>
    <p> <a href="page1.php">Vá para a página 1</a> </p> 
    </center>

</body>
</html>	
