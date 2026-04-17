<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Programs - Warm Theme</title>
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }

html {
    scroll-behavior: smooth;
}

/* New Warm "Solarized" Light Theme */
body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    background-color: #fdf6e3; /* Warm cream background */
    color: #073642; /* Very dark slate text */
    overflow-x: hidden;
}

/* Container Layout */
.container {
    display: flex;
    min-height: 100vh;
}

/* Sidebar */
.navbar {
    width: 250px;
    background-color: #eee8d5; /* Darker beige/earthy tone */
    padding: 25px 20px;
    display: flex;
    flex-direction: column;
    overflow-y: auto;
    position: fixed;
    height: 100vh;
    border-right: 1px solid #d7d0c0; /* Subtle border */
}

.navlist { list-style: none; }
.navlist li { margin: 15px 0; }

.navlist a {
    text-decoration: none;
    color: #586e75; /* Muted content text */
    font-weight: 500;
    font-size: 18px;
    padding: 12px 15px;
    display: block;
    border-radius: 8px;
    transition: all 0.3s ease;
    word-wrap: break-word;
}

.navlist a:hover {
    background-color: rgba(203, 75, 22, 0.1); /* Burnt orange tint */
    color: #cb4b16; /* Burnt orange accent */
}

/* Main Content */
.main-content {
    flex-grow: 1;
    padding: 40px;
    margin-left: 250px; /* Adjusted for new sidebar width */
}

.box-main {
    border: none;
    border-top: 5px solid #cb4b16; /* Strong orange accent top */
    padding: 30px 25px;
    background-color: #fdf6e3; /* Match body bg */
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
    overflow-x: auto;
}

h1 {
    color: #cb4b16; /* Burnt orange accent */
    font-size: 32px;
    margin-bottom: 25px;
    text-align: center;
    font-weight: 600;
}

/* Grid layout for program links */
.program-grid {
    display: grid;
    grid-template-columns: repeat(10, 1fr);
    gap: 10px;
    margin-bottom: 30px;
}

.program-grid a {
    display: block;
    background-color: #eee8d5; /* Darker beige */
    padding: 8px;
    text-align: center;
    border-radius: 6px;
    text-decoration: none;
    color: #586e75; /* Muted text */
    font-size: 14px;
    font-weight: 500;
    transition: all 0.3s ease;
    border: 1px solid #d7d0c0; /* Subtle border */
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.program-grid a:hover {
    background-color: #cb4b16; /* Burnt orange accent */
    color: #fdf6e3; /* Cream background color */
    border-color: #cb4b16;
}

/* Program Section */
.program-section {
    margin-top: 40px;
    border-top: 2px solid #eee8d5; /* Beige separator */
    padding-top: 20px;
    background-color: transparent;
    border-radius: 0;
    box-shadow: none;
}

.program-section h2 {
    color: #b58900; /* Deep yellow accent */
    font-size: 24px;
    margin-bottom: 15px;
    font-weight: 500;
}

/* Code box */
.code-box {
    background-color: #fcfaf5; /* Slightly off-white cream */
    border: 1px solid #d7d0c0; /* Beige border */
    border-left: 3px solid #b58900; /* Yellow accent */
    border-radius: 8px;
    padding: 15px;
    font-family: 'Courier New', monospace;
    overflow-x: auto;
    max-width: 100%;
    white-space: pre-wrap;
    word-wrap: break-word;
    margin-bottom: 20px;
    color: #073642; /* Dark slate text */
}

/* Output box */
.output-box {
    background-color: rgba(181, 137, 0, 0.05); /* Very transparent yellow */
    border: 1px solid #d7d0c0; /* Beige border */
    border-radius: 8px;
    padding: 15px;
    margin-bottom: 40px;
}

.output-box h3 {
    margin-bottom: 10px;
    color: #b58900; /* Deep yellow accent */
    font-weight: 500;
}

.output-box p {
    font-weight: normal;
    color: #586e75; /* Muted text */
    line-height: 1.6;
}

/* Footer */
footer {
    position: fixed;
    bottom: 10px;
    left: 250px; /* Aligned with main-content */
    width: calc(100% - 250px); /* Takes remaining width */
    text-align: center;
    font-weight: 500;
    font-size: 16px;
    color: #93a1a1; /* Muted grey */
    background-color: transparent;
    padding: 0;
    z-index: 1000;
    box-shadow: none;
}

/* Back-to-top button */
#backToTop {
    position: fixed;
    bottom: 80px;
    right: 30px;
    z-index: 1001;
    background-color: #cb4b16; /* Burnt orange accent */
    color: #fdf6e3; /* Cream text */
    border: none;
    border-radius: 50%;
    padding: 10px 14px;
    font-size: 20px;
    cursor: pointer;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
    display: none;
    line-height: 1;
}
#backToTop:hover {
    background-color: #b58900; /* Yellow accent on hover */
    transform: translateY(-3px);
}

/* Responsive Grid */
@media(max-width: 1400px) { 
    .program-grid { grid-template-columns: repeat(5, 1fr); } 
}

@media(max-width: 900px) {
    .program-grid { grid-template-columns: repeat(2, 1fr); }
    .main-content { margin-left: 0; padding: 20px; }
    .navbar { 
        position: relative; 
        width: 100%; 
        height: auto; 
        flex-direction: row; 
        overflow-x: auto; 
        white-space: nowrap; 
        border-right: none;
        border-bottom: 1px solid #d7d0c0;
    }
    .navlist {
        display: flex;
    }
    .navlist li {
        margin: 0 5px;
    }
    
    footer {
        position: relative;
        left: 0;
        width: 100%;
        bottom: 0;
        padding: 15px;
        background-color: #eee8d5; /* Match sidebar bg */
        margin-top: 20px;
        color: #93a1a1;
    }
}
</style>
</head>
<body>

<div class="container">
    <nav class="navbar">
        <ul class="navlist">
            <li><a href="index.php">Home</a></li>
            <li><a href="prog.html">Programs</a></li>
            <li><a href="#">Integrating PHP and Database</a></li>
            <li><a href="form.php">Integrating Forms and Database</a></li>
            <li><a href="file.php">File System</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
    </nav>
    <section class="main-content">
        <div class="box-main">
            <h1>Integrating PHP and DATABASE</h1>

 <?php
    /*ways to connect to a Mysql database
    1. Mysqli extension 
    2. PDO
    */
    //Connecting to the database
    $Servername = "localhost";
    $username = "root";
    $password = "";

    //Create a connection
    try{
    $conn = mysqli_connect($Servername, $username, $password);
        echo "Connection was successful<br>";
    } catch(mysqli_sql_exception $e)
    {
        die("sorry we failed to connect: ".$e->getMessage());
    }
    mysqli_report(MYSQLI_REPORT_OFF);
    //Create a database 
    $sql = "CREATE DATABASE navphp";
    $result = mysqli_query($conn, $sql);
    
    //Check for the database creation success
    if($result){
        echo "The database was created successfully!";
    }
    else{
        echo "The database was not created successfully 
        because of this error --> ".mysqli_error($conn);
    }
    //selecting the database
    mysqli_select_db($conn, "navphp");
    //creating table in database 
    $sql ="CREATE TABLE `trip2025` (`Sno` INT NOT NULL , `Name` VARCHAR(12) 
    NOT NULL , `Dest` VARCHAR(12) NOT NULL , PRIMARY KEY (`Sno`)) ;";
    $result = mysqli_query($conn, $sql);
    
    //Check for the table creation success
    if($result){
        echo "<br>The table was created successfully!";
    }
    else{
        echo "<br>The table was not created successfully
         because of this error --> ".mysqli_error($conn);

    }
    //selecting the database
    mysqli_select_db($conn, "navphp");
    //sql query to be executed
    $sql = "INSERT INTO `trip2025` (`Sno`, `Name`, `Dest`) 
    VALUES('1', 'Navneet', 'Canada');";

    $result = mysqli_query($conn, $sql); 
    //Add a new trip to the trip2025 table
    if($result){
        echo "<br>The record has been inserted successfully!<br>";
    }
    else{
        echo "<br>The record was not inserted successfully because of 
        this error --> ".mysqli_error($conn)."<br>";
    }
    //selecting database
    mysqli_select_db($conn, "navphp");

    //retrieve data from database
    $sql = "SELECT * FROM trip2025;";
    $result = mysqli_query($conn, $sql);
    echo "<p>The records of the table are <br> </p>";
    while($row = mysqli_fetch_array($result))
    {
        echo $row['Sno']." ".$row['Name']." ".$row['Dest'];
        echo "<br>";
    }
    
    //Closing the connection 
    mysqli_close($conn);

?>
  </div>