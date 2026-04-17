<?php
//verify the user login info
    session_start();
    $_SESSION['username']="Navneet Kaur";
    $_SESSION['favpage']="forms";
    echo "We have saved your session";
?>