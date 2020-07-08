<?php

session_start();

function create_session_token(){
    $string = "TEstenkdjsahdkljsa" +  date("Y.m.d");
    $token = sha1($string);
    $_SESSION['token'] = $token;
    $_SESSION['Tempo'] = time();
}

function verify_session_token(){
    $string = "TEstenkdjsahdkljsa" +  date("Y.m.d");
    $token = sha1($string);

    if ($_SESSION['token'] == $token) return 1;
    else return 0;
}


?>