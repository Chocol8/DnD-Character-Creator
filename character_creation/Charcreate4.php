<?php
if (isset($_POST["submit"])) {
    $spellcasting = $_POST["spell_class"];
    $spellability = $_POST["spell_ability"];
    $spellatk = $_POST["spell_atk"];
    $spellsave = $_POST["spell_save"];
    $spellfocus = $_POST["spell_focus"];

    $cantrips = $_POST["cantext"];
    $max = $_POST["max_can"];
    $spellfeat = $_POST["spellfeat"];
    $component = $_POST["compou"];

    $lvl1 = $_POST["lvl1"];
    $slots1 = (int)($_POST["slots1"]);
    $slotused1 = (int)($_POST["slotused1"]);

    $lvl2 = $_POST["lvl2"];
    $slots2 = (int)($_POST["slots2"]);
    $slotused2 = (int)($_POST["slotused2"]);

    $lvl3 = $_POST["lvl3"];
    $slots3 = (int)($_POST["slots3"]);
    $slotused3 = (int)($_POST["slotused3"]);

    $lvl4 = $_POST["lvl4"];
    $slots4 = (int)($_POST["slots4"]);
    $slotused4 = (int)($_POST["slotused4"]);

    $lvl5 = $_POST["lvl5"];
    $slots5 = (int)($_POST["slots5"]);
    $slotused5 = (int)($_POST["slotused5"]);

    $lvl6 = $_POST["lvl6"];
    $slots6 = (int)($_POST["slots6"]);
    $slotused6 = (int)($_POST["slotused6"]);

    $lvl7 = $_POST["lvl7"];
    $slots7 = (int)($_POST["slots7"]);
    $slotused7 = (int)($_POST["slotused7"]);

    $lvl8 = $_POST["lvl8"];
    $slots8 = (int)($_POST["slots8"]);
    $slotused8 = (int)($_POST["slotused8"]);

    $lvl9 = $_POST["lvl9"];
    $slots9 = (int)($_POST["slots9"]);
    $slotused9 = (int)($_POST["slotused9"]);

    session_start();
    $_SESSION["spellcasting"] = $spellcasting;
    $_SESSION["spell_ability"] = $spellability;
    $_SESSION["spell_atk"] = $spellatk;
    $_SESSION["spell_save"] = $spellsave;
    $_SESSION["spell_focus"] = $spellfocus;

    $_SESSION["cantrips"] = $cantrips;
    $_SESSION["max"] = $max;
    $_SESSION["spell_feature"] = $spellfeat;
    $_SESSION["spell_component"] = $component;

    $_SESSION["spell_lvl1"] = $lvl1;
    $_SESSION["spell_slots1"] = $slots1;
    $_SESSION["spell_slotused1"] = $slotused1;

    $_SESSION["spell_lvl2"] = $lvl2;
    $_SESSION["spell_slots2"] = $slots2;
    $_SESSION["spell_slotused2"] = $slotused2;

    $_SESSION["spell_lvl3"] = $lvl3;
    $_SESSION["spell_slots3"] = $slots3;
    $_SESSION["spell_slotused3"] = $slotused3;

    $_SESSION["spell_lvl4"] = $lvl4;
    $_SESSION["spell_slots4"] = $slots4;
    $_SESSION["spell_slotused4"] = $slotused4;

    $_SESSION["spell_lvl5"] = $lvl5;
    $_SESSION["spell_slots5"] = $slots5;
    $_SESSION["spell_slotused5"] = $slotused5;

    $_SESSION["spell_lvl6"] = $lvl6;
    $_SESSION["spell_slots6"] = $slots6;
    $_SESSION["spell_slotused6"] = $slotused6;

    $_SESSION["spell_lvl7"] = $lvl7;
    $_SESSION["spell_slots7"] = $slots7;
    $_SESSION["spell_slotused7"] = $slotused7;

    $_SESSION["spell_lvl8"] = $lvl8;
    $_SESSION["spell_slots8"] = $slots8;
    $_SESSION["spell_slotused8"] = $slotused8;

    $_SESSION["spell_lvl9"] = $lvl9;
    $_SESSION["spell_slots9"] = $slots9;
    $_SESSION["spell_slotused9"] = $slotused9;

    header("location: ../Notes.php");
    exit();
} else {
    header("location: ../spells.php");
    exit();
}
