<?php
if (isset($_POST["submit"])) {

    $notes = $_POST["note"];

    session_start();
    $_SESSION["notes"] = $notes;

    include "charcreateF.php";

    header("location: ../CharSelect.php");
    exit();
} else {
    header("location: ../Notes.php");
    exit();
}