<?php session_start(); 
$string = "TEstenkdjsahdkljsa" +  date("Y.m.d");
$token = sha1($string);

    
$usuario = $_GET["usuario"];
$senha = $_GET["senha"];

$db = new SQLite3('database.db', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

$result = $db->query("SELECT * FROM Artista WHERE nome='$usuario';");

$row = $result->fetchArray();
if ($row['senha'] == sha1($senha)){
    $_SESSION['token'] = $token;
    $_SESSION['artista_id'] = $row["ID"];

    header("Location: http://fourier.ifsc.usp.br/~stefantcleal/concurso_foto_final/adicionar_fotos.php", true, 301);
} else{
    header("Location: http://fourier.ifsc.usp.br/~stefantcleal/concurso_foto_final/login.html", true, 301);
}

$db->close();
?>