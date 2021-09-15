<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>P-Media</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<nav>
    <div class="wrapper">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="discover.php">About Us</a></li>
            <li><a href="blog.php">Find Blogs</a></li>
            <?php
                if(isset($_SESSION["useruid"]))
                {
                    echo " <li><a href='profile.php'>Profile Page</a></li>";
                    echo " <li><a href='includes/logout.inc.php'>Logout</a></li>";
                }else
                    {
                        echo " <li><a href='signup.php'>Sign Up</a></li>";
                        echo " <li><a href='login.php'>Login</a></li>";
                    }
            ?>

        </ul>
    </div>
</nav>
