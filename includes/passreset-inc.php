<?php
if (isset($_POST["submit"])) {

    $opass = $_POST["opass"];
    $pass = $_POST["pass"];
    $conpass = $_POST["conpass"];
    $UID = $_POST["UID"];

    require_once 'dbh-inc.php';
    require_once 'function-inc.php';



    if (emptyInputLogin($opass, $pass, $conpass) !== false) {
        header("location: ../PassReset.php?error=emptyinput");
        exit();
    }
    if (pwdmatch($pass, $conpass) !== false) {
        header("location: ../PassReset.php?error=passwordsdontmatch");
        exit();
    }

    changepass($conn, $opass, $pass, $UID);
} else {
    header("location: ../PassReset.php");
    exit();
}
