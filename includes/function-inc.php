<?php
// Registration---------------------------------------------------------------------------------------------------------------------------------------------------------------
function emptyInputSignup($email, $uname, $pass, $conpass)
{
    $result = false;
    if (empty($email) || empty($uname) || empty($pass) || empty($conpass)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($uname)
{
    $checker = "/^[a-zA-Z0-9]*$/";
    $result = false;
    if (!preg_match($checker, $uname)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidemail($email)
{

    $result = false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdmatch($pass, $conpass)
{
    $result = false;
    if ($pass !== $conpass) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function UidExist($conn, $uname, $email)
{
    $sql = "SELECT * FROM users WHERE USERS_UID =? OR USERS_EMAIL =?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registration.php?error=statementfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $uname, $email);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultdata)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $email, $uname, $pass)
{

    $sql = "INSERT INTO users(USERS_UID, USERS_PWD, USERS_EMAIL,USERS_CHAR, USERS_STATUS) values(?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registration.php?error=statementfailed");
        exit();
    }
    $charac = 0;
    $status = 1;
    // $hashedpass = password_hash($pass, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sssii", $uname, $pass, $email, $charac, $status);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php");
    exit();
}
// -------------------------------------------------------------------------------------------------------------------------------------
// Login -------------------------------------------------------------------------------------------------------------------------------
function emptyInputLogin($uname, $pass)
{
    $result = '';
    if (empty($uname) || empty($pass)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginuser($conn, $uname, $pass)
{
    $uidExists = UidExist($conn, $uname, $uname);

    if ($uidExists === false) {
        header("location: ../index.php?error=wronglogin2");
        exit();
    }

    $passhashed = $uidExists["users_pwd"];

    if ($pass == $passhashed) {
        $checkpass = true;
    } else {
        $checkpass = false;
    }


    if ($checkpass === false) {
        header("location: ../index.php?error=wronglogin");
        exit();
    } else if ($checkpass === true) {
        session_start();
        $_SESSION["users_id"] = $uidExists["users_id"];
        $_SESSION["users_uid"] = $uidExists["users_uid"];
        $_SESSION["users_email"] = $uidExists["users_email"];
        $_SESSION["users_chars"] = $uidExists["users_char"];
        $_SESSION["users_status"] = $uidExists["users_status"];

        header("location: ../CharSelect.php");
        exit();
    }
}

// ----------------------------------------------------------------------------------------------------------------
// Password Reset -------------------------------------------------------------------------------------------------

function changepass($conn, $opass, $pass, $UID)
{

    $uidExists = UidExist($conn, $UID, $UID);

    if ($uidExists === false) {
        header("location: ../PassReset.php?error=wrongpass");
        exit();
    }
    // $opass = password_hash($opass, PASSWORD_DEFAULT);
    $passhashed = $uidExists["users_pwd"];

    if ($opass == $passhashed) {
        $checkpass = true;
    } else {
        $checkpass = false;
    }
    if ($checkpass === false) {
        header("location: ../PassReset.php?error=wrongpass");
        exit();
    } else if ($checkpass === true) {
        $hashedpass = $pass;
        $sql = "UPDATE users SET USERS_PWD =? WHERE USERS_UID =?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../PassReset.php?error=statementfailed");
            exit();
        }


        mysqli_stmt_bind_param($stmt, "ss", $hashedpass, $UID);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        session_start();
        session_unset();
        session_destroy();
        header("location: ../index.php?error=none");
        exit();
    }
}

// ----------------------------------------------------------------------------------------------------------------
// Character creation ---------------------------------------------------------------------------------------------

function charExist($conn, $charid) // for fetching data from the character table
{
    $sql = "SELECT * FROM charac WHERE char_uid =?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../CharSelect.php?error=statementfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $charid);
    mysqli_stmt_execute($stmt);
    $resultdata = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultdata)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function charadd($conn, $user_uid)
{
    $user_char = (int)($_SESSION["users_chars"]);
    $sql = "UPDATE users SET users_char =? WHERE USERS_UID =?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Notes.php?error=statementfailed");
        exit();
    }


    mysqli_stmt_bind_param($stmt, "is", $user_char, $user_uid);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

function CharCreate_basics(
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
) {
    $sql = "INSERT INTO charac(
    char_UID,
    users_users_id,
    char_name,
    char_hp,
    char_race,
    char_bg,
    char_lvl,
    char_str,
    char_dex,
    char_con,
    char_int,
    char_wis,
    char_cha,
    char_backstory,
    char_alignment,
    char_ptrait,
    char_ideals,
    char_flaws,
    char_about,
    char_status,
    char_class,
    char_subclass,
    char_notes,
    char_feats,
    char_language,
    char_equipment) 
    values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Notes.php?error=statementfailed");
        exit();
    }
    $char_UID = (string)(uniqid());
    $char_status = 1;
    $userid = $_SESSION["users_id"];

    mysqli_stmt_bind_param(
        $stmt,
        "sisissiiiiiiissssssissssss",
        $char_UID,
        $userid,
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
        $char_status,
        $char_class,
        $char_subclass,
        $char_notes,
        $char_feats,
        $char_language,
        $char_equipment
    );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    $_SESSION["char_uid"] = $char_UID;
}

function charprof(
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
) {
    $charExists = charExist($conn, $char_uid);
    $sql = "INSERT INTO proficiencies(
    characters_char_id,
    prof_athletics,
    prof_acrobatics,
    prof_sleith,
    prof_stealth,
    prof_arcana,
    prof_history,
    prof_investigation,
    prof_nature,
    prof_religion,
    prof_animal_handling,
    prof_insight,
    prof_medicine,
    prof_perception,
    prof_survival,
    prof_deception,
    prof_intimidation,
    prof_performance,
    prof_persuasion,
    prof_endurance,
    prof_streetwise) 
    values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Notes.php?error=statementfailed");
        exit();
    }

    $foreign_char_ID = $charExists["char_id"];

    mysqli_stmt_bind_param(
        $stmt,
        "iiiiiiiiiiiiiiiiiiiii",
        $foreign_char_ID,
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
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

// function createfeats($conn, $feats, $char_uid)
// {
//     $charExists = charExist($conn, $char_uid);

//     $sql = "INSERT INTO feats(characters_char_id,feats_names) values(?,?,?,?,?);";
//     $stmt = mysqli_stmt_init($conn);
//     if (!mysqli_stmt_prepare($stmt, $sql)) {
//         header("location: ../registration.php?error=statementfailed");
//         exit();
//     }
//     $foreign_ID = $charExists["char_id"];

//     mysqli_stmt_bind_param($stmt, "s", $uname, $pass, $email, $charac, $status);
//     mysqli_stmt_execute($stmt);
//     mysqli_stmt_close($stmt);
//     header("location: ../index.php");
//     exit();
// }
function charspells(
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
) {
    $charExists = charExist($conn, $char_uid);
    $sql = "INSERT INTO spells(
        character_char_id,
        spells_sp_class,
        spells_sp_ability,
        spells_atk_bonus,
        spells_sdc_rec_period,
        spells_sp_focus,
        spells_cantrips,
        spells_max,
        spell_feature,
        spell_component,
        spells_lvl_1,
        spells_lvl1_mslots,
        spells_lvl1_slots_used,
        spells_lvl_2,
        spells_lvl2_mslots,
        spells_lvl2_slots_used,
        spells_lvl_3,
        spells_lvl3_mslots,
        spells_lvl3_slots_used,
        spells_lvl_4,
        spells_lvl4_mslots,
        spells_lvl4_slots_used,
        spells_lvl_5,
        spells_lvl5_mslots,
        spells_lvl5_slots_used,
        spells_lvl_6,
        spells_lvl6_mslots,
        spells_lvl6_slots_used,
        spells_lvl_7,
        spells_lvl7_mslots,
        spells_lvl7_slots_used,
        spells_lvl_8,
        spells_lvl8_mslots,
        spells_lvl8_slots_used,
        spells_lvl_9,
        spells_lvl9_mslots,
        spells_lvl9_slots_used) 
        values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Notes.php?error=statementfailed");
        exit();
    }

    $foreign_char_ID = $charExists["char_id"];

    mysqli_stmt_bind_param(
        $stmt,
        "iiiiiisisssiisiisiisiisiisiisiisiisii",
        $foreign_char_ID,
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
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}


function chardel($conn, $user_id, $char_id)
{

    $sql = "UPDATE charac SET char_status=? WHERE char_id=? AND users_users_id=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../CharSelect.php?error=statementfailed");
        exit();
    }

    $char_status = 0;
    mysqli_stmt_bind_param($stmt, "iii", $char_status, $char_id, $user_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}