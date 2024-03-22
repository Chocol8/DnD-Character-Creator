<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="../Case Study/styles/registration.css">
</head>

<body>
    <div class="imageL"></div>
    <div class="imageR"></div>
    <div class="c-wrap">
        <form action="../Case Study/includes/register-inc.php" method="POST">
            <div>
                <input type="email" name="email" placeholder="Email"><br><br>
                <input type="text" name="username" placeholder="Username"><br><br>
                <input type="password" name="pass" placeholder="Password"><br><br>
                <input type="password" name="conpass" placeholder="Confirm Password"><br><br>
            </div>
            <div class="butt2">
                <button type="submit" name="register">Sign Up</button>
            </div>


        </form>
        <div class="butt2">
            <button type="button" name="TOLOGIN" onclick="location.href='index.php'">Return</button>
        </div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";
            } else if ($_GET["error"] == "invaliduid") {
                echo "<p>Choose a proper username!</p>";
            } else if ($_GET["error"] == "invalidemail") {
                echo "<p>Choose a proper username!</p>";
            } else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwords doesn't match!</p>";
            } else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong, try again!</p>";
            } else if ($_GET["error"] == "usernametaken") {
                echo "<p>Username is already taken!</p>";
            } else if ($_GET["error"] == "none") {
                echo "<p>You have been signed up!</p>";
            }
        }
        ?>
    </div>
</body>

</html>