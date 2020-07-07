<?php
// Conectando ao SQLite3
$db = new SQLite3("first.db");

// Executando comando SQL

	// Vamos fazer uma dump apra ver as propriedades do objeto 
echo "<p> A Query retornou $numLinhas linhas </p>";
echo "<p> primeira segunda terceira </p>";

for  ($i = 0; i < 10000; $i++){
	$random1 = rand(1, 1000000);
	$random2 = rand(1, 10000000);	
	$db->query("INSERT INTO first (primeira,segunda) VAlUES ($random1,$random2)");
}

$results = $db->query("SELECT * FROM first");


while ($row = $results->fetchArray()){
	$primeira = $row["primeira"];
	$segunda = $row["segunda"];
	$terceira = $row["terceira"];

	echo '<p> $primeira <br> $segunda <br> $terceira </p>';
	//var_dump($row);
}

$db->close();

?>
