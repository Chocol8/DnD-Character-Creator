<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Account</title>
    <link rel="stylesheet" type="text/css" href="../Case Study/styles/Account_style.css">
</head>

<body>
    <div class="butts">
        <img src="../Case Study/images/AccIcon2.png" width="200px" height="200px" style="margin:auto; position:relative;">
        <div>
            <div class="bll">

                <label class="lbl"><?php echo $_SESSION["users_uid"] ?></label>

            </div>
            <div>
                <button type="button" onclick="location.href='PassReset.php'"><label>Reset Password</label></button>
            </div>
            <div>
                <button type="button" onclick="location.href='CharSelect.php'"><label>Back to Home</label></button>
            </div>
            <div>
                <button type="button" onclick="location.href='includes/logout-inc.php'"><label>Log out</label></button>
            </div>
</body>

</html>