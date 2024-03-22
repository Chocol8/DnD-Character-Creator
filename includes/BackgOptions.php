<?php
    // Conditional if statement here for 
    //detecting if user has character (if needed)
    //-------------------------------------
    session_start();
    //-------------------------------------
    // assign variable from DB here--------
    $set = $_SESSION["char_bg"];
    //-------------------------------------
    
    if($set != NULL)
    {
        echo 
        "
            <option value='$set' selected hidden>$set</option>
        ";
    }
    
    echo "
    <option value='Acolyte'>Acolyte</option>
    <option value='Anthropologist'>Anthropologist</option>
    <option value='Archaeologist'>Archaeologist</option>
    <option value='Adopted'>Adopted</option>
    <option value='Black-Fist-Double-Agent'>Black Fist Double Agent</option>
    <option value='Caravan Specialist'>Caravan Specialist</option>
    <option value='Charlatan'>Charlatan</option>
    <option value='City-Watch'>City Watch</option>
    <option value='Clan-Crafter'>Clan Crafter</option>
    <option value='Cloistered-Scholar'>Cloistered Scholar</option>
    <option value='Cormanthor-Refugee'>Cormanthor Refugee</option>
    <option value='Courter'>Courter</option>
    <option value='Criminal'>Criminal</option>
    <option value='Dissenter'>Dissenter</option>
    <option value='Dragon-Casualty'>Dragon Casualty</option>
    <option value='Earthspur-Miner'>Earthspur Miner</option>
    <option value='Entertainer'>Entertainer</option>
    <option value='Faction-Agent'>Faction Agent</option>
    <option value='Far-Traveller'>Far Traveller</option>
    <option value='Folk-Hero'>Folk Hero</option>
    <option value='Gate-Urchin'>Gate Urchin</option>
    <option value='Gladiator'>Gladiator</option>
    <option value='Guild-Artisan'>Guild Artisan</option>
    <option value='Guild-Merchant'>Guild Merchant</option>
    <option value='Harborfolk'>Harborfolk</option>
    <option value='Haunted-One'>Haunted One</option>
    <option value='Hermit'>Hermit</option>
    <option value='Hillsfar-Merchant'>Hillsfar Merchant</option>
    <option value='Hillsfar-Smuggler'>Hillsfar Smuggler</option>
    <option value='House-Agent'>House Agent</option>
    <option value='Inheritor'>Inheritor</option>
    <option value='Initiate'>Initiate</option>
    <option value='Inquisitor'>Inquisitor</option>
    <option value='Investigator'>Investigator</option>
    <option value='Iron-Route-Bandit'>Iron Route Bandit</option>
    <option value='Knight'>Knight</option>
    <option value='Knight-of-the-order'>Knight of the Order</option>
    <option value='Mercenary-Veteran'>Mercinary Veteran</option>
    <option value='Muimaster-Aristocrat'>Muimaster Aristocrat</option>
    <option value='Noble'>Noble</option>
    <option value='Outlander'>Outlander</option>
    <option value='Phlan Insurgent'>Phlan Insurgent</option>
    <option value='Pirate'>Pirate</option>
    <option value='Sage'>Sage</option>
    <option value='Sailor'>Sailor</option>
    <option value='Secret-Identity'>Secret Identity</option>
    <option value='Shade-fanatic'>Shade Fanatic</option>
    <option value='Soldier'>Soldier</option>
    <option value='Spy'>Spy</option>
    <option value='Student-of-Magic'>Student of Magic</option>
    <option value='Stojanow-Prisoner'>Stojanow Prisoner</option>
    <option value='Ticklebelly-Nomad'>Tickebelly Nomad</option>
    <option value='Trade-Sheriff'>Trade Sheriff</option>
    <option value='Urban-Bounty-Hunter'>Urban Bounty Hunter</option>
    <option value='Urchin'>Urchin</option>
    <option value='Uthgardt Tribe Member'>Uthgardt Tribe Member</option>
    <option value='Vizier'>Vizier</option>
    <option value='Waterdhavian-Noble'>Waterdhavian Noble</option>
    "
?>