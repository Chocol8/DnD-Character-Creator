<?php
    // Conditional if statement here for detecting if user has character (if needed)
    //-------------------------------------
    session_start();
    //-------------------------------------
    // assign variable from DB here--------
    $set = $_SESSION["char_race"];
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
        <option value='select' hidden>Select</option>
        <option value='pb' disabled>Player's Handbook</option>
        <option value='Dragonborn'>Dragonborn</option>
        <option value='Dwarf'>Dwarf</option>
        <option value='Elf'>Elf</option>
        <option value='Gnome'>Gnome</option>
        <option value='Half-elf'>Half-Elf</option>
        <option value='Halfling'>Halfling</option>
        <option value='Half-Orc'>Half-Orc</option>
        <option value='Human'>Human</option>
        <option value='Tiefling'>Tiefling</option>
        <option value='' disabled></option>
        
        <option value='Eberron' disabled>Eberron Races</option>
        <option value='Changeling'>Changeling</option>
        <option value='Kalashtar'>kalashtar</option>
        <option value='Shifter'>Shifter</option>
        <option value='Warforged'>Warforged</option>
        <option value='' disabled></option>
        
        <option value='eer' disabled>Elemental Evil's Races</option>
        <option value='Aarakocra'>Aarakocra</option>
        <option value='Genasi'>Genasi</option>
        <option value='Goliath'>Goliath</option>
        <option value='' disabled></option>
        
        <option value='ggr' disabled>Guildmater's Guide Races</option>
        <option value='Centaur'>Centaur</option>
        <option value='Loxodon'>Loxodon</option>
        <option value='Minotaur'>Minotaur</option>
        <option value='Simic Hybrid'>Simic Hybrid</option>
        <option value='Vedalken'>Vedalken</option>
        <option value='' disabled></option>
        
        <option value='ps' disabled>Plane Shifts</option>
        <option value='Aetherborn'>Aetherborn</option>
        <option value='Aven'>Avem</option>
        <option value='Khenra'>Khenra</option>
        <option value='Kor'>Kor</option>
        <option value='Merfolk'>Merfolk</option>
        <option value='Naga'>Naga</option>
        <option value='Siren'>Siren</option>
        <option value='Vampire'>Vampire</option>
        <option value='' disabled></option>
        
        <option value='vgr' disabled>Volo's Guide Races</option>
        <option value='Aasimar'>Aasimar</option>
        <option value='Bugbear'>Bugbear</option>
        <option value='Firbolg'>Firbolg</option>
        <option value='Goblin'>Goblin</option>
        <option value='Hobgoblin'>Hobgoblin</option>
        <option value='Kenku'>Kenku</option>
        <option value='Kobold'>Kobold</option>
        <option value='Lizardfolk'>Lizardfolk</option>
        <option value='Orc'>Orc</option>
        <option value='Tabaxi'>Tabaxi</option>
        <option value='Triton'>Triton</option>
        <option value='Yuan-ti'>Yuan-ti</option>
        <option value='' disabled></option>
        
        <option value='tof' disabled>Tome of Foes</option>
        <option value='Gith'>Gith</option>
        <option value='' disabled></option>
        
        <option value='lr' disabled>Locathah Rising</option>
        <option value='Locathah'>Locathah</option>
        <option value='' disabled></option>
        
        <option value='tp' disabled>Tortle Package</option>
        <option value='Tortle'>Tortle</option>
        <option value='' disabled></option>
        
        <option value='ai' disabled>Acquisitions Incorporated</option>
        <option value='Verdan'>Verdan</option>
    "
?>