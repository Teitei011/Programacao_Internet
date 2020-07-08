<?php 
    session_start();

    $string = "TEstenkdjsahdkljsa" +  date("Y.m.d");
    $token = sha1($string);
    
    if ($_SESSION['token'] != $token){
        header( "Location: http://fourier.ifsc.usp.br/~stefantcleal/classificadoII/main.html/" );
    }

?>