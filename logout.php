<?php 
if(session_status() == PHP_SESSION_NONE)
{
    session_start();//start session if session not start
}

unset($_SESSION['customer']);

header('Location: index.php');
