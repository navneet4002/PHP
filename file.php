<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Programs - Warm Theme</title>
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }

html { scroll-behavior: smooth; }

body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    background-color: #fdf6e3;
    color: #073642;
    overflow-x: hidden;
}

.container { display: flex; min-height: 100vh; }

.navbar {
    width: 250px;
    background-color: #eee8d5;
    padding: 25px 20px;
    display: flex;
    flex-direction: column;
    overflow-y: auto;
    position: fixed;
    height: 100vh;
    border-right: 1px solid #d7d0c0;
}

.navlist { list-style: none; }
.navlist li { margin: 15px 0; }

.navlist a {
    text-decoration: none;
    color: #586e75;
    font-weight: 500;
    font-size: 18px;
    padding: 12px 15px;
    display: block;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.navlist a:hover {
    background-color: rgba(203, 75, 22, 0.1);
    color: #cb4b16;
}

.main-content {
    flex-grow: 1;
    padding: 40px;
    margin-left: 250px;
}

.box-main {
    border: none;
    border-top: 5px solid #cb4b16;
    padding: 30px 25px;
    background-color: #fdf6e3;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
}

h1 {
    color: #cb4b16;
    font-size: 32px;
    margin-bottom: 25px;
    text-align: center;
    font-weight: 600;
}

h2 {
    color: #b58900;
    font-size: 24px;
    margin-bottom: 15px;
    font-weight: 500;
}

form {
    margin-top: 20px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 6px;
    font-weight: 500;
}

input, textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #d7d0c0;
    border-radius: 6px;
    font-size: 16px;
    background-color: #fcfaf5;
}

button {
    background-color: #cb4b16;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s ease;
}

button:hover {
    background-color: #b58900;
}
</style>
</head>
<body>

<div class="container">
    <nav class="navbar">
        <ul class="navlist">
            <li><a href="index.php">Home</a></li>
            <li><a href="prog.html">Programs</a></li>
            <li><a href="mysql.php">Integrating PHP and Database</a></li>
            <li><a href="form.php">Integrating Forms and Database</a></li>
            <li><a href="#">File System</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
    </nav>

    <section class="main-content">
        <div class="box-main">
            <h1>File System</h1>
            
<h2>1. readfile(filename);</h2>
<?php
    $a = readfile("myfile.txt");
    echo $a;

?>
<h2>2. fopen(filename,mode);</h2>
<?php
    $fptr = fopen("myfile.txt","r");
    echo $fptr;
?>
<h2>3. filesize(filename);</h2>
<?php

    $fsize= filesize("myfile.txt");
    echo $fsize;

?>

<h2>4. fread(filepointer,length of the file);</h2>
<?php
    $fptr = fopen("myfile.txt","r");
    if(!$fptr){
        die("Unable to open this file. Please enter a valid filename..");
    }
    $content = fread($fptr,filesize("myfile.txt"));
    echo $content;
    echo "<h2>5. fclose(filepointer);</h2>";
    fclose($fptr);

?>
<?php
    $fptr = fopen("myfile.txt","r");
    echo "<h2>5. fgets(filepointer);</h2>";
    echo "<p>To read the file line by line</p>";
    echo "<h3>Content of file</h3>";
    while($a = fgets($fptr)){
        echo $a;
    }
    fclose($fptr);
?>
<?php
    $fptr = fopen("myfile.txt","r");
    echo "<h2>6. fgetc(filepointer);</h2>";
    echo "<p>To read the file Character by Character</p>";
    echo "<h3>Content of file</h3>";
    while($a = fgetc($fptr)){
        echo $a;
        if($a == ".")
        {
            break;
        }
    }
    fclose($fptr);

?>
<h2>7. fwrite(filepointer,string of data);</h2>
<?php
    $fptr = fopen("myfile2.txt","w");
    fwrite($fptr,"This is the best website on this planet.Please dont argue with
    me on this one.\n");
    fwrite($fptr,"\nThis is the another content.");
    fclose($fptr);
?>
<?php
    $fptr = fopen("myfile2.txt","r");
    if(!$fptr){
        die("Unable to open this file. Please enter a valid filename..");
    }
    $content = fread($fptr,filesize("myfile2.txt"));
    echo $content;
    fclose($fptr);
?>
<h2>8. Append to the file </h2>
<?php
    $fptr = fopen("myfile2.txt","a");
    fwrite($fptr,"This is being append to the file.\n");
    fclose($fptr);
?>
<?php
    $fptr = fopen("myfile2.txt","r");
    if(!$fptr){
        die("Unable to open this file. Please enter a valid filename..");
    }
    $content = fread($fptr,filesize("myfile2.txt"));
    echo $content;
    fclose($fptr);
?>

</section>
</div>

</body>
</html>
