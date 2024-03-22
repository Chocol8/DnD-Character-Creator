<?php
session_start();
if (isset($_POST["del"])) {

    include 'dbh-inc.php';
    include 'function-inc.php';
    $char_id = (int)($_POST["char_id"]);
    $user_id = (int)($_SESSION["users_id"]);

    $sql = "UPDATE charac SET char_status=0 WHERE char_id=$char_id";
    mysqli_query($conn, $sql);
    header("location:../CharSelect.php");
    exit();
}