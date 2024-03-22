<?php

include '../includes/dbh-inc.php';
include '../includes/function-inc.php';


$char_name = (string)($_SESSION["char_name"]);
$char_hp = (int)($_SESSION["char_hp"]);
$char_race = (string)($_SESSION["char_race"]);
$char_bg = (string)($_SESSION["char_bg"]);
$char_lvl = (int)($_SESSION["char_lvl"]);
$char_str = (int)($_SESSION["char_str"]);
$char_dex = (int)($_SESSION["char_dex"]);
$char_con = (int)($_SESSION["char_con"]);
$char_int = (int)($_SESSION["char_int"]);
$char_wis = (int)($_SESSION["char_wis"]);
$char_cha = (int)($_SESSION["char_cha"]);
$char_backstory = (string)($_SESSION["char_backstory"]);
$char_alignment = (string)($_SESSION["char_alignment"]);
$char_ptrait = (string)($_SESSION["char_ptrait"]);
$char_ideals = (string)($_SESSION["char_ideals"]);
$char_flaws = (string)($_SESSION["char_flaws"]);
$char_about = (string)($_SESSION["char_about"]);
$char_class = (string)($_SESSION["char_class"]);
$char_subclass = (string)($_SESSION["char_subclass"]);
$char_notes = (string)($_SESSION["notes"]);
$char_feats = (string)($_SESSION["feats"]);
$char_language = (string)($_SESSION["language"]);
$char_equipment = (string)($_SESSION["equipments"]);

CharCreate_basics(
    $conn,
    $char_name,
    $char_hp,
    $char_race,
    $char_bg,
    $char_lvl,
    $char_str,
    $char_dex,
    $char_con,
    $char_int,
    $char_wis,
    $char_cha,
    $char_backstory,
    $char_alignment,
    $char_ptrait,
    $char_ideals,
    $char_flaws,
    $char_about,
    $char_class,
    $char_subclass,
    $char_notes,
    $char_feats,
    $char_language,
    $char_equipment
);


$char_uid = (string)($_SESSION["char_uid"]);


$prof_athletics = (int)($_SESSION["prof_athletic"]);
$prof_acrobatics = (int)($_SESSION["prof_acro"]);
$prof_sleith = (int)($_SESSION["prof_sleight"]);
$prof_stealth = (int)($_SESSION["prof_stealth"]);
$prof_arcana = (int)($_SESSION["prof_arcana"]);
$prof_history = (int)($_SESSION["prof_history"]);
$prof_investigation = (int)($_SESSION["prof_investigation"]);
$prof_nature = (int)($_SESSION["prof_nature"]);
$prof_religion = (int)($_SESSION["prof_religion"]);
$prof_animal_handling = (int)($_SESSION["prof_animal_handling"]);
$prof_insight = (int)($_SESSION["prof_insight"]);
$prof_medicine = (int)($_SESSION["prof_medicine"]);
$prof_perception = (int)($_SESSION["prof_perception"]);
$prof_survival = (int)($_SESSION["prof_survival"]);
$prof_deception = (int)($_SESSION["prof_deception"]);
$prof_intimidation = (int)($_SESSION["prof_intimidation"]);
$prof_performance = (int)($_SESSION["prof_performance"]);
$prof_persuasion = (int)($_SESSION["prof_persuasion"]);
$prof_endurance = (int)($_SESSION["prof_endurance"]);
$prof_streetwise = (int)($_SESSION["prof_streetwise"]);

charprof(
    $conn,
    $char_uid,
    $prof_athletics,
    $prof_acrobatics,
    $prof_sleith,
    $prof_stealth,
    $prof_arcana,
    $prof_history,
    $prof_investigation,
    $prof_nature,
    $prof_religion,
    $prof_animal_handling,
    $prof_insight,
    $prof_medicine,
    $prof_perception,
    $prof_survival,
    $prof_deception,
    $prof_intimidation,
    $prof_performance,
    $prof_persuasion,
    $prof_endurance,
    $prof_streetwise
);

$spells_sp_class = (int)($_SESSION["spellcasting"]);
$spells_sp_ability = (int)($_SESSION["spell_ability"]);
$spells_atk_bonus = (int)($_SESSION["spell_atk"]);
$spells_sdc_rec_period = (int)($_SESSION["spell_save"]);
$spells_sp_focus = (int)($_SESSION["spell_focus"]);
$spells_cantrips = (string)($_SESSION["cantrips"]);
$spells_max = (int)($_SESSION["max"]);
$spells_feature = (string)($_SESSION["spell_feature"]);
$spells_component = (string)($_SESSION["spell_component"]);


$spells_lvl_1 = (string)($_SESSION["spell_lvl1"]);
$spells_lvl1_mslots = (int)($_SESSION["spell_slots1"]);
$spells_lvl1_slots_used = (int)($_SESSION["spell_slotused1"]);

$spells_lvl_2 = (string)($_SESSION["spell_lvl2"]);
$spells_lvl2_mslots = (int)($_SESSION["spell_slots2"]);
$spells_lvl2_slots_used = (int)($_SESSION["spell_slotused2"]);

$spells_lvl_3 = (string)($_SESSION["spell_lvl3"]);
$spells_lvl3_mslots = (int)($_SESSION["spell_slots3"]);
$spells_lvl3_slots_used = (int)($_SESSION["spell_slotused3"]);

$spells_lvl_4 = (string)($_SESSION["spell_lvl4"]);
$spells_lvl4_mslots = (int)($_SESSION["spell_slots4"]);
$spells_lvl4_slots_used = (int)($_SESSION["spell_slotused4"]);

$spells_lvl_5 = (string)($_SESSION["spell_lvl5"]);
$spells_lvl5_mslots = (int)($_SESSION["spell_slots5"]);
$spells_lvl5_slots_used = (int)($_SESSION["spell_slotused5"]);

$spells_lvl_6 = (string)($_SESSION["spell_lvl6"]);
$spells_lvl6_mslots = (int)($_SESSION["spell_slots6"]);
$spells_lvl6_slots_used = (int)($_SESSION["spell_slotused6"]);

$spells_lvl_7 = (string)($_SESSION["spell_lvl7"]);
$spells_lvl7_mslots = (int)($_SESSION["spell_slots7"]);
$spells_lvl7_slots_used = (int)($_SESSION["spell_slotused7"]);

$spells_lvl_8 = (string)($_SESSION["spell_lvl8"]);
$spells_lvl8_mslots = (int)($_SESSION["spell_slots8"]);
$spells_lvl8_slots_used = (int)($_SESSION["spell_slotused8"]);

$spells_lvl_9 = (string)($_SESSION["spell_lvl9"]);
$spells_lvl9_mslots = (int)($_SESSION["spell_slots9"]);
$spells_lvl9_slots_used = (int)($_SESSION["spell_slotused9"]);


charspells(
    $conn,
    $char_uid,
    $spells_sp_class,
    $spells_sp_ability,
    $spells_atk_bonus,
    $spells_sdc_rec_period,
    $spells_sp_focus,
    $spells_cantrips,
    $spells_max,
    $spells_feature,
    $spells_component,
    $spells_lvl_1,
    $spells_lvl1_mslots,
    $spells_lvl1_slots_used,
    $spells_lvl_2,
    $spells_lvl2_mslots,
    $spells_lvl2_slots_used,
    $spells_lvl_3,
    $spells_lvl3_mslots,
    $spells_lvl3_slots_used,
    $spells_lvl_4,
    $spells_lvl4_mslots,
    $spells_lvl4_slots_used,
    $spells_lvl_5,
    $spells_lvl5_mslots,
    $spells_lvl5_slots_used,
    $spells_lvl_6,
    $spells_lvl6_mslots,
    $spells_lvl6_slots_used,
    $spells_lvl_7,
    $spells_lvl7_mslots,
    $spells_lvl7_slots_used,
    $spells_lvl_8,
    $spells_lvl8_mslots,
    $spells_lvl8_slots_used,
    $spells_lvl_9,
    $spells_lvl9_mslots,
    $spells_lvl9_slots_used
);


// pinaka dulo ito VVVVVVVVVVVVVVV
$user_char = ((int)($_SESSION["users_chars"] + 1));
$_SESSION["users_chars"] = $user_char;
$user_uid = (string)($_SESSION["users_uid"]);
charadd($conn, $user_uid);

unset($_SESSION["char_uid"]);