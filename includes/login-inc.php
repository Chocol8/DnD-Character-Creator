<?php
if (isset($_POST["submit"])) {

    $uname = $_POST["uname"];
    $pass = $_POST["pass"];

    require_once 'dbh-inc.php';
    require_once 'function-inc.php';

    if (emptyInputLogin($uname, $pass) !== false) {
        header("location: ../DnD.php?error=emptyinput");
        exit();
    }

    loginuser($conn, $uname, $pass);
} else {
    header("location: ../DnD.php");
    exit();
}
