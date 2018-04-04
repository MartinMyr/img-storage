<?php
    session_start();

    $user="user";
    $pass="pass";
    if($_POST["user"]==$user && $_POST["password"]==$pass){
        $_SESSION["loggedIn"]=true;
    }
    


