<?php

session_start();

$current_time = time();
$session_duration = 60 * 60 * 3;

if(isset($_SESSION["user"])){
    if( $current_time - $_SESSION["user"]["login_time"] > $session_duration){
        session_destroy();
        session_unset();
        header('location: ' . URLROOT . '/', true,302);
    }
}
