<?php
if (isset($_POST["viewer"])) {
    include "../includes/dbh-inc.php";
    $char_id = $_POST["char_id"];

    session_start();
    $sql = "SELECT * FROM charac WHERE char_id=$char_id";
    $result = mysqli_query($conn, $sql);
    while ($r = mysqli_fetch_assoc($result)) {

        $_SESSION["char_id"] = $r['char_id'];
        $_SESSION["char_name"] = $r["char_name"];
        $_SESSION["char_hp"] = $r["char_hp"];
        $_SESSION["char_race"] = $r["char_race"];
        $_SESSION["char_bg"] = $r["char_bg"];
        $_SESSION["char_lvl"] = $r["char_lvl"];

        $_SESSION["char_str"] = $r["char_str"];
        $_SESSION["char_dex"] = $r["char_dex"];
        $_SESSION["char_con"] = $r["char_con"];
        $_SESSION["char_int"] = $r["char_int"];
        $_SESSION["char_wis"] = $r["char_wis"];
        $_SESSION["char_cha"] = $r["char_cha"];

        $_SESSION["char_backstory"] = $r["char_backstory"];
        $_SESSION["char_alignment"] = $r["char_alignment"];
        $_SESSION["char_ptrait"] = $r["char_ptrait"];
        $_SESSION["char_ideals"] = $r["char_ideals"];
        $_SESSION["char_flaws"] = $r["char_flaws"];
        $_SESSION["char_about"] = $r["char_about"];
        $_SESSION["char_class"] = $r["char_class"];
        $_SESSION["char_subclass"] = $r["char_subclass"];
        $_SESSION["char_notes"] = $r["char_notes"];
        $_SESSION["char_feats"] = $r["char_feats"];
        $_SESSION["char_language"] = $r["char_language"];
        $_SESSION["char_equipment"] = $r["char_equipment"];
    }

    $sql2 = "SELECT * FROM proficiencies WHERE characters_char_id=$char_id";
    $result2 = mysqli_query($conn, $sql2);
    while ($fetch = mysqli_fetch_assoc($result2)) {
        $_SESSION["prof1"] = $fetch["prof_acrobatics"];
        $_SESSION["prof2"] = $fetch["prof_animal_handling"];
        $_SESSION["prof3"] = $fetch["prof_arcana"];
        $_SESSION["prof4"] = $fetch["prof_athletics"];
        $_SESSION["prof5"] = $fetch["prof_deception"];
        $_SESSION["prof6"] = $fetch["prof_endurance"];
        $_SESSION["prof7"] = $fetch["prof_history"];
        $_SESSION["prof8"] = $fetch["prof_insight"];
        $_SESSION["prof9"] = $fetch["prof_intimidation"];
        $_SESSION["prof10"] = $fetch["prof_investigation"];
        $_SESSION["prof11"] = $fetch["prof_medicine"];
        $_SESSION["prof12"] = $fetch["prof_nature"];
        $_SESSION["prof13"] = $fetch["prof_perception"];
        $_SESSION["prof14"] = $fetch["prof_performance"];
        $_SESSION["prof15"] = $fetch["prof_persuasion"];
        $_SESSION["prof16"] = $fetch["prof_religion"];
        $_SESSION["prof17"] = $fetch["prof_sleith"];
        $_SESSION["prof18"] = $fetch["prof_stealth"];
        $_SESSION["prof19"] = $fetch["prof_streetwise"];
        $_SESSION["prof20"] = $fetch["prof_survival"];
    }

    $sql3 = "SELECT * FROM spells WHERE character_char_id=$char_id";
    $result3 = mysqli_query($conn, $sql3);
    while ($fetcher3 = mysqli_fetch_assoc($result3)) {
        $_SESSION["spellcasting"] = $fetcher3["spells_sp_class"];
        $_SESSION["spell_ability"] = $fetcher3["spells_sp_ability"];
        $_SESSION["spell_atk"] = $fetcher3["spells_atk_bonus"];
        $_SESSION["spell_save"] = $fetcher3["spells_sdc_rec_period"];
        $_SESSION["spell_focus"] = $fetcher3["spells_sp_focus"];
        $_SESSION["cantrips"] = $fetcher3["spells_cantrips"];
        $_SESSION["max"] = $fetcher3["spells_max"];
        $_SESSION["spell_feature"] = $fetcher3["spell_feature"];
        $_SESSION["spell_component"] = $fetcher3["spell_component"];

        $_SESSION["spell_lvl1"] = $fetcher3["spells_lvl1"];
        $_SESSION["spell_slots1"] = $fetcher3["spells_lvl1_mslots"];
        $_SESSION["spell_slotused1"] = $fetcher3["spells_lvl1_slots_used"];

        $_SESSION["spell_lvl2"] = $fetcher3["spells_lvl2"];
        $_SESSION["spell_slots2"] = $fetcher3["spells_lvl2_mslots"];
        $_SESSION["spell_slotused2"] = $fetcher3["spells_lvl2_slots_used"];

        $_SESSION["spell_lvl3"] = $fetcher3["spells_lvl3"];
        $_SESSION["spell_slots3"] = $fetcher3["spells_lvl3_mslots"];
        $_SESSION["spell_slotused3"] = $fetcher3["spells_lvl3_slots_used"];

        $_SESSION["spell_lvl4"] = $fetcher3["spells_lvl4"];
        $_SESSION["spell_slots4"] = $fetcher3["spells_lvl4_mslots"];
        $_SESSION["spell_slotused4"] = $fetcher3["spells_lvl4_slots_used"];

        $_SESSION["spell_lvl5"] = $fetcher3["spells_lvl5"];
        $_SESSION["spell_slots5"] = $fetcher3["spells_lvl5_mslots"];
        $_SESSION["spell_slotused5"] = $fetcher3["spells_lvl5_slots_used"];

        $_SESSION["spell_lvl6"] = $fetcher3["spells_lvl6"];
        $_SESSION["spell_slots6"] = $fetcher3["spells_lvl6_mslots"];
        $_SESSION["spell_slotused6"] = $fetcher3["spells_lvl6_slots_used"];

        $_SESSION["spell_lvl7"] = $fetcher3["spells_lvl7"];
        $_SESSION["spell_slots7"] = $fetcher3["spells_lvl7_mslots"];
        $_SESSION["spell_slotused7"] = $fetcher3["spells_lvl7_slots_used"];

        $_SESSION["spell_lvl8"] = $fetcher3["spells_lvl8"];
        $_SESSION["spell_slots8"] = $fetcher3["spells_lvl8_mslots"];
        $_SESSION["spell_slotused8"] = $fetcher3["spells_lvl8_slots_used"];

        $_SESSION["spell_lvl9"] = $fetcher3["spells_lvl9"];
        $_SESSION["spell_slots9"] = $fetcher3["spells_lvl9_mslots"];
        $_SESSION["spell_slotused9"] = $fetcher3["spells_lvl9_slots_used"];
    }

    header("location: CharCreate_v2_v.php");
    exit();
}
