<?php 
    session_start();

    $string = "TEstenkdjsahdkljsa" +  date("Y.m.d");
    $token = sha1($string);
    $_SESSION['token'] = $token;
    $_SESSION['Tempo'] = time();

?>