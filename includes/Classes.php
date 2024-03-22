<?php
    // Conditional if statement here for detecting if user has character (if needed)
    //-------------------------------------
    session_start();
    //-------------------------------------
    // assign variable from DB here--------
    $set = $_SESSION["char_class"];
    //-------------------------------------
    
    if($set != NULL)
    {
        echo 
        "
            <option value='$set' selected hidden>$set</option>
        ";
    }


    echo
    "
        <option value='select'>Select</option>
        <option value='Barbarian'>Barbarian</option>
        <option value='Bard'>Bard</option>
        <option value='Cleric'>Cleric</option>
        <option value='Druid'>Druid</option>
        <option value='Fighter'>Fighter</option>
        <option value='Monk'>Monk</option>
        <option value='Mystic'>Mystic</option>
        <option value='Paladin'>Paladin</option>
        <option value='Ranger'>Ranger</option>
        <option value='Rogue'>Rogue</option>
        <option value='Sorcerer'>Sorcerer</option>
        <option value='Warlock'>Warlock</option>
        <option value='Wizard'>Wizard</option>
        <option value='Artificier'>Artificer</option>
    ";
?>