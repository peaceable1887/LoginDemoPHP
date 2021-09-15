<?php
include "header.php";
?>
<section class="signup-form">
    <h2>Log In</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username/E-Mail...">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="submit">Log In</button>
    </form>
    <?php
    if(isset($_GET["error"]))
    {
        if($_GET["error"] == "emptyinput")
        {
            echo "Fill in all Field";
        }else if($_GET["error"] == "wronglogin")
        {
            echo "Incorrect login information";
        }
    }
    ?>
</section>
</body>


</html>
