<?php
    session_start();
    if (isset($_SESSION['storename'])) {
        echo "User Name:", $_SESSION['sotrename'];
        echo "User age:", $_SESSION['storeage'];
    } else {        
        $_SESSION['username'] = $_POST["name"];
        $_SESSION['storeage'] = $_POST["age"] ;
    }
?>
