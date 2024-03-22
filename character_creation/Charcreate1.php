<?php
if (isset($_POST["submit2"])) {
    $char_name = $_POST["cName"];
    $hp = $_POST["hp"];
    $race = $_POST["race"];
    $background = $_POST["backg"];
    $level = $_POST["lvl"];

    $strength = $_POST["charS"];
    $dexterity = $_POST["charD"];
    $constitution = $_POST["charC"];
    $intelligence = $_POST["charI"];
    $wisdom = $_POST["charW"];
    $charisma = $_POST["charCh"];

    $classes = $_POST["class"];
    $subclass = $_POST["dom"];

    $acro = $_POST["prof1"];
    $ahandling = $_POST["prof2"];
    $arcana = $_POST["prof3"];
    $athletic = $_POST["prof4"];
    $deception = $_POST["prof5"];
    $endurance = $_POST["prof6"];
    $history = $_POST["prof7"];
    $insight = $_POST["prof8"];
    $intimidation = $_POST["prof9"];
    $investigation = $_POST["prof10"];
    $medicine = $_POST["prof11"];
    $nature = $_POST["prof12"];
    $perception = $_POST["prof13"];
    $performance = $_POST["prof14"];
    $persuasion = $_POST["prof15"];
    $religion = $_POST["prof16"];
    $sleight = $_POST["prof17"];
    $stealth = $_POST["prof18"];
    $streetwise = $_POST["prof19"];
    $survival = $_POST["prof20"];

    session_start();
    $_SESSION["char_name"] = $char_name;
    $_SESSION["char_hp"] = $hp;
    $_SESSION["char_race"] = $race;
    $_SESSION["char_bg"] = $background;
    $_SESSION["char_lvl"] = $level;

    $_SESSION["char_str"] = $strength;
    $_SESSION["char_dex"] = $dexterity;
    $_SESSION["char_con"] = $constitution;
    $_SESSION["char_int"] = $intelligence;
    $_SESSION["char_wis"] = $wisdom;
    $_SESSION["char_cha"] = $charisma;
    $_SESSION["char_class"] = $classes;
    $_SESSION["char_subclass"] = $subclass;

    $_SESSION["prof_acro"] = $acro;
    $_SESSION["prof_animal_handling"] = $ahandling;
    $_SESSION["prof_arcana"] = $arcana;
    $_SESSION["prof_athletic"] = $athletic;
    $_SESSION["prof_deception"] = $deception;
    $_SESSION["prof_endurance"] = $endurance;
    $_SESSION["prof_history"] = $history;
    $_SESSION["prof_insight"] = $insight;
    $_SESSION["prof_intimidation"] = $intimidation;
    $_SESSION["prof_investigation"] = $investigation;
    $_SESSION["prof_medicine"] = $medicine;
    $_SESSION["prof_nature"] = $nature;
    $_SESSION["prof_perception"] = $perception;
    $_SESSION["prof_performance"] = $performance;
    $_SESSION["prof_persuasion"] = $persuasion;
    $_SESSION["prof_religion"] = $religion;
    $_SESSION["prof_sleight"] = $sleight;
    $_SESSION["prof_stealth"] = $stealth;
    $_SESSION["prof_streetwise"] = $streetwise;
    $_SESSION["prof_survival"] = $survival;

    header("location: ../CharBackground.php");
    exit();
} else {
    header("location: ../CharCreate_v2.php");
    exit();
}
