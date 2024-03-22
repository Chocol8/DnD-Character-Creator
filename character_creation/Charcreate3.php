<?php
if (isset($_POST["submit"])) {

    $feats = $_POST["tFeats"];
    $language = $_POST["tLangu"];
    $equipment = $_POST["tEquip"];

    session_start();
    $_SESSION["feats"] = $feats;
    $_SESSION["language"] = $language;
    $_SESSION["equipments"] = $equipment;

    header("location: ../spells.php");
    exit();
} else {
    header("location: ../SkillsEquip.php");
    exit();
}
