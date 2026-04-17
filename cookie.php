<?php
 echo "Welcome to the world of cookies";
 setcookie("category","books",time() + 86400, "/");

?>
<html>
    <head>
    <title>Setting and Accessing cookie with php</title>
</head>
<body>
    <?php
        echo "Set Cookie";
        echo $_COOKIE["category"]."<br>";
    ?>
</body>
</html>
