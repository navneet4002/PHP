<?php
//verify the user login info
    session_start();
    echo "Welcome ".$_SESSION['username'] ;
    echo "<br>Your favorite page is ".$_SESSION['favpage'];
    echo "<br>";
?>