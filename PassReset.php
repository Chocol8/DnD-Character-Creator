<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Password Reset</title>
    <link rel="stylesheet" type="text/css" href="styles/PassReset_style.css">
</head>

<body>
    <div class="imageL"></div>
    <div class="imageR"></div>
    <div class="c-wrap">
        <form action="includes/passreset-inc.php" method="post">
            <div>
                <input type="hidden" name="UID" value="<?php echo $_SESSION["users_uid"]; ?>"><br>
                <input type="password" name="opass" placeholder="Current Password"><br><br>
                <input type="password" name="pass" placeholder="Password"><br><br>
                <input type="password" name="conpass" placeholder="Confirm Password"><br><br>
            </div>
            <div class="error">
                <?php

                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p>Fill in all fields!</p>";
                    } else if ($_GET["error"] == "wrongpass") {
                        echo "<p>Incorrect Password!</p>";
                    } else if ($_GET["error"] == "passwordsdontmatch") {
                        echo "<p>Passwords doesn't match!</p>";
                    } else if ($_GET["error"] == "stmtfailed") {
                        echo "<p>Something went wrong, try again!</p>";
                    } else if ($_GET["error"] == "none") {
                        echo "<p>You have been signed up!</p>";
                    }
                }
                ?>
            </div>
            <div class="butt1">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>

        <div class="butt2">
            <button type="button" name="backaccount" onclick="location.href='Account.php'">Return</button>
        </div>
    </div>
</body>

</html>