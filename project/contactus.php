<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/stylemenu.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        .banner {
            background-color: #222; /* original/dark color */
            color: white;
            padding: 15px 0;
            width: 100%;
        }

        .banner img {
            height: 50px;
            vertical-align: middle;
        }

        .panel-nav {
            margin-top: 10px;
        }

        .dropbtn a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: inline-block;
        }

        .dropbtn {
            background-color: transparent;
            border: none;
            margin: 0 10px;
            cursor: pointer;
            font-size: 16px;
        }

        main {
            padding: 30px 20px;
        }

        .contact-form-container {
            background-color: #fff;
            max-width: 600px;
            margin: 30px auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #222;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #444;
        }

        footer {
            background-color: #222;
            color: white;
            padding: 15px 0;
            margin-top: 40px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
require 'admin/dbcon.php';
?>

<header class="banner">
    <center>
        <img src="images/logo.svg">
        <div class="panel panel-nav">
            <div class="dropdown"><button class="dropbtn"><a href="home1.php"><b>HOME</b></a></button></div>
            <div class="dropdown"><button class="dropbtn"><a href="admin/index1.html"><b>Login</b></a></button></div>
            <div class="dropdown"><button class="dropbtn"><a href="contactus.php"><b>Contact Us</b></a></button></div>
            <div class="dropdown"><button class="dropbtn"><a href="details.php"><b>Details</b></a></button></div>
        </div>
    </center>
</header>

<main>
    <div class="contact-form-container">
        <h1>Contact Us</h1>
        <form method="POST" action="">
            <table border="0" cellpadding="10">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="cname" required></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="cemail" required></td>
                </tr>
                <tr>
                    <td>Subject:</td>
                    <td><input type="text" name="csubject" required></td>
                </tr>
                <tr>
                    <td>Message:</td>
                    <td><textarea name="ccomments" rows="5" required></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value="Send Message">
                    </td>
                </tr>
            </table>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $name = mysqli_real_escape_string($conn, $_POST['cname']);
            $email = mysqli_real_escape_string($conn, $_POST['cemail']);
            $subject = mysqli_real_escape_string($conn, $_POST['csubject']);
            $comments = mysqli_real_escape_string($conn, $_POST['ccomments']);

            $sql = "INSERT INTO tblcontactus_ZD04970 (cname, cemail, csubject, ccomments) 
                    VALUES ('$name', '$email', '$subject', '$comments')";

            if ($conn->query($sql) === TRUE) {
                echo "<p style='color:green; text-align:center;'>Thank you! Your message has been sent.</p>";
            } else {
                echo "<p style='color:red; text-align:center;'>Error: " . $conn->error . "</p>";
            }
        }
        ?>
    </div>
</main>

<footer>
    Footer information
</footer>

</body>
</html>
