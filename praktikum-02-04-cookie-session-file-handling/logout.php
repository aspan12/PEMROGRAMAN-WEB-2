<?php


$username = "david";
        $password = "20192205145";

        //memulai session
        session_start();

        //mengambil inputan dari form login
        
       
       $_SESSION["username"] = '';
       $_SESSION["password"] = '';

       unset($_SESSION["username"], $_SESSION["password"]);
       session_unset();
       session_destroy();
           header("location: loging.php");
           
           ?>