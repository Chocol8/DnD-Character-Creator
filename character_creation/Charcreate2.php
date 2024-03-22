<?php
if (isset($_POST["submit"])) {
    $backstory = $_POST["backstory"];
    $alignment = $_POST["alignm"];
    $persona = $_POST["ptt"];
    $ideals = $_POST["idee"];
    $flaws = $_POST["flaww"];
    $about = $_POST["abou"];

    session_start();
    $_SESSION["char_backstory"] = $backstory;
    $_SESSION["char_alignment"] = $alignment;
    $_SESSION["char_ptrait"] = $persona;
    $_SESSION["char_ideals"] = $ideals;
    $_SESSION["char_flaws"] = $flaws;
    $_SESSION["char_about"] = $about;

    header("location: ../SkillsEquip.php");
    exit();
} else {
    header("location: ../CharBackground.php");
    exit();
}
