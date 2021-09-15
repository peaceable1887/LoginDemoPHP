<?php
include "header.php";
?>
<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full name...">
        <input type="text" name="email" placeholder="E-Mail...">
        <input type="text" name="uid" placeholder="Username...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdrepeat" placeholder="Repeat password...">
        <button type="submit" name="submit">Sign Up</button>
    </form>
    <?php
    if(isset($_GET["error"]))
    {
        if($_GET["error"] == "emptyinput")
        {
            echo "Fill in all Field";
        }else if($_GET["error"] == "invaliduid")
        {
            echo "Choose a proper username";
        }else if($_GET["error"] == "invalidemail")
        {
            echo "Choose a proper email";
        }else if($_GET["error"] == "passwordsdontmatch")
        {
            echo "Passwords doesnt match!";
        }else if($_GET["error"] == "stmtfailed")
        {
            echo "Something went wrong!";
        }
        else if($_GET["error"] == "usernametaken")
        {
            echo "Username already taken!";
        } else if($_GET["error"] == "none")
        {
            echo "You have signed up!";
        }
    }
    ?>
</section>

</body>


</html>
