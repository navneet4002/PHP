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
            <li><a href="#">Integrating Forms and Database</a></li>
            <li><a href="file.php">File System</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
    </nav>

    <section class="main-content">
        <div class="box-main">
            <h1>Integrating FORMS and DATABASE</h1>
            <h2>Contact us for your Concern</h2>

<?php
// 🌿 Step 1: Handle Form Submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $desc = trim($_POST['desc']);

    if (!empty($name) && !empty($email) && !empty($desc)) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "contactus";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
            die("<div style='color:red;'>Connection failed: " . mysqli_connect_error() . "</div>");
        } else {
            $sql = "INSERT INTO `contact` (`Name`, `email`, `Concern`, `Date`) 
                    VALUES ('$name', '$email', '$desc', current_timestamp())";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                // Prevent form resubmission
                header("Location: " . $_SERVER['PHP_SELF'] . "?success=1");
                exit;
            } else {
                echo "<div style='color:red; font-weight:bold;'>❌ Error: " . mysqli_error($conn) . "</div>";
            }
        }
    } else {
        echo "<div style='color:red; font-weight:bold;'>⚠️ Please fill in all fields before submitting.</div>";
    }
}

//  Step 2: Show success message if redirected
if (isset($_GET['success'])) {
    echo "<div style='color:green; font-weight:bold; margin-bottom:15px;'>
            ✅ Your entry has been submitted successfully!
          </div>";
}
?>

            <!--  Contact Form -->
            <form action="form.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                    <small>We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea name="desc" id="desc" cols="30" rows="5"></textarea>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>

        <div style="margin-top:40px;">
<?php
//  Step 3: Display All Entries
$servername = "localhost";
$username = "root";
$password = "";
$database = "contactus";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

$sql = "SELECT * FROM `contact`";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

echo "<h3 style='color:#b58900;'>$num records found in the Database</h3><br>";

if ($num > 0) {
    while($row = mysqli_fetch_assoc($result)){
        echo "<div style='background:#fcfaf5; border:1px solid #d7d0c0; 
                     margin-bottom:10px; padding:10px; border-radius:8px;'>";
        echo "<strong>Name:</strong> " . htmlspecialchars($row['Name']) . "<br>";
        echo "<strong>Email:</strong> " . htmlspecialchars($row['email']) . "<br>";
        echo "<strong>Concern:</strong> " . htmlspecialchars($row['Concern']) . "<br>";
        echo "<strong>Date:</strong> " . $row['Date'] . "<br>";
        echo "</div>";
    }
}
?>
        </div>
    </section>
</div>

</body>
</html>
