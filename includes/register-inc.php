<?php
if (isset($_POST["register"])) {
    $email = $_POST["email"];
    $uname = $_POST["username"];
    $pass = $_POST["pass"];
    $conpass = $_POST["conpass"];

    require_once 'dbh-inc.php';
    require_once 'function-inc.php';

    if (emptyInputSignup($email, $uname, $pass, $conpass) !== false) {
        header("location: ../registration.php?error=emptyinput");
        exit();
    }

    if (invalidUid($uname) !== false) {
        header("location: ../registration.php?error=invaliduid");
        exit();
    }
    if (invalidemail($email) !== false) {
        header("location: ../registration.php?error=invalidemail");
        exit();
    }
    if (pwdmatch($pass, $conpass) !== false) {
        header("location: ../registration.php?error=passwordsdontmatch");
        exit();
    }
    if (UidExist($conn, $uname, $email) !== false) {
        header("location: ../registration.php?error=usernametaken");
        exit();
    }
    createUser($conn, $email, $uname, $pass);
} else {
    header("location: ../registration.php");
    exit();
}
