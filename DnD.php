<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FC's D&D Character Creator</title>
    <link rel="stylesheet" type="text/css" href="../Case Study/styles/DnD_style.css">
</head>

<body>
    <div class="imageL"></div>
    <div class="imageR"></div>
    <div class="c-wrap">
        <div class="logo"></div>
        <form action="includes/login-inc.php" method="post">
            <div>
                <input type="text" name="uname" placeholder="Username"><br><br>
                <input type="password" name="pass" placeholder="Password"><br><br>
            </div>
            <?php
            if (isset($_GET["error"])) {

                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields!</p>";
                } else if ($_GET["error"] == "wronglogin") {
                    echo "<p>Incorrect Email/Username/Password!</p>";
                } else if ($_GET["error"] == "wronglogin2") {
                    echo "<p>Account Does not Exist...</p>";
                }
            }
            ?>

            <div class="butt1">
                <button type="submit" name="submit">&nbsp Log In</button>
            </div>
        </form>

        <div class="butt2">
            <button type="button" name="register" onclick="location.href='registration.php'">Sign Up</button>
        </div>
    </div>
</body>

</html>