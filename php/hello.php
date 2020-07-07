<!DOCTYPE html>
<html>
<body>

<p> Mensagem de texto HTML</p>


<p><i>
<?php
 echo "Mensagem de texto PHP";
?>
</i></p>

<?php
 $variavel_a = 5;
 $b = 8;
 $c = $variavel_a + $b;

 echo "<p> A + B = $c </p>";
 echo '<p> A + B = $c </p>';

?>

<br>
<br>

<p> Tabuada do 2 </p>

<?php
 $a = 0;
 for($a=0;$a<=10;$a++) {
   $c = 2 * $a;
   echo "<p> 2 x $a = $c </p>";
 }
?>

<br>

<p> Tabuada do 3 </p>

<?php
 $a = 0;
 for($a=0;$a<=10;$a++) {
   $c = 3 * $a;
 ?>
   <hr>
   <p> 3 x <?php echo $a; ?> = <?php echo $c; ?> </p>
    <?php
    }
   ?>

   <hr>


<br>
<br>
<br>

<p> EXEMPLOS DE TABUADAS </P>

<hr>

<?php
 for($b=1;$b<=10;$b++) {
?>

<p> Tabuada do <?php echo $b; ?> </p>

<?php
 $a = 0;
 for($a=0;$a<=10;$a++) {
   $c = $b * $a;
   echo "<p> $b x $a = $c </p>";
 }
?>

<hr>

<?php
}
?>




</body>
</html>
