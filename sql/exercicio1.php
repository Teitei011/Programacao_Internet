<?php
    //conectando ao SQLite3
$db = new SQLite3('first.db');
//executando comando SQL
$results = $db->query('SELECT * FROM first');
var_dump($results);
// vamos fazer um dump para ver as propriedades do objeto
//$numLinhas = $results->numRows();
$rowTemp = $results->fetchArray();
$numLinhas = count($rowTemp);

//
echo "<p>a query retornou $numLinhas linhas</p>";
echo "<p>primeira segunda terceira</p>";
while ($row = $results->fetchArray()) {
    $primeira = $row[ 'primeira'];
    $segunda = $row['segunda'];
    $terceira = $row['terceira'];
    echo "<p>$primeira $segunda $terceira</p>";
    //var_dump($row);
}

$sql = "UPDATE second SET primeira=2 WHERE id=2;";
$results = $db->query($sql);


$sql = "DELETE FROM second WHERE id=3;";
$results = $db->query($sql);

var_dump($results);

$db->close();


?>
