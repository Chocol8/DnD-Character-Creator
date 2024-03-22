<?php
	// Conditional if statement here for detecting if user has character (if needed)
    //-------------------------------------
    session_start();
    //-------------------------------------
    // assign variable from DB here--------
    $set = $_SESSION["char_subclass"];
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
    <option value='arti' disabled>Artificer</option>
    <option value='Alchemist'>Alchemist</option>
    <option value='Archivist'>Archivist</option>
    <option value='Artillerist'>Artillerist</option>
    <option value='Battle Smith'>Battle Smith</option>
    <option value='Gun Smith'>Gun Smith</option>
    <option value=''disabled></option>
    <option value='barb' disabled>Barbarian</option>
    <option value='Ancestral Guardian'>Ancestral Guardian</option>
    <option value='Battlerager'>Battlerager</option>
    <option value='Beast'>Beast</option>
    <option value='Berzerker'>Berzerker</option>
    <option value='Storm Herald'>Storm Herald</option>
    <option value='Totem Warrior - Bear'>Totem Warrior - Bear</option>
    <option value='Totem Warrior - Eagle'>Totem Warrior - Eagle</option>
    <option value='Totem Warrior - Elk'>Totem Warrior - Elk</option>
    <option value='Totem Warrior - Tiger'>Totem Warrior - Tiger</option>
    <option value='Totem Warrior - Wolf'>Totem Warrior - Wolf</option>
    <option value='' disabled></option>
    <option value='bard' disabled>Bard</option>
    <option value='Eloquence'>Eloquence</option>
    <option value='Glamour'>Glamour</option>
    <option value='Lore'>Lore</option>
    <option value='Satire'>Satire</option>
    <option value='Swords'>Swords</option>
    <option value='Valor'>Valor</option>
    <option value='Whispers'>Whispers</option>
    <option value='' disabled></option>
    <option value='cleric' disabled>Cleric</option>
    <option value='Ambition'>Ambition</option>
    <option value='Arcana'>Arcana</option>
    <option value='City'>City</option>
    <option value='Death'>Death</option>
    <option value='Forge'>Forge</option>
    <option value='Grave'>Grave</option>
    <option value='knowledege'>Knowledge</option>
    <option value='Life'>Life</option>
    <option value='Light'>Light</option>
    <option value='Nature'>Nature</option>
    <option value='Order'>Order</option>
    <option value='Protection'>Protection</option>
    <option value='Soldier'>Solidarity</option>
    <option value='Strength'>Strength</option>
    <option value='Tempest'>Tempest</option>
    <option value='Trickery'>Trickery</option>
    <option value='Twilight'>Twilight</option>
    <option value='War'>War</option>
    <option value='Zeal'>Zeal</option>
    <option value='' disabled></option>
    <option value='druid' disabled>Druid</option>
    <option value='Dreams'>Dreams</option>
    <option value='Land'>Land</option>
    <option value='Moon'>Moon</option>
    <option value='Shephered'>Shepherd</option>
    <option value='Spore'>Spore</option>
    <option value='Twilight'>Twilight</option>
    <option value='Wildfire'>Wildfire</option>
    <option value='' disabled></option>
    <option value='fight' disabled>Fighter</option>
    <option value='Arcane Archer'>Arcane Archer</option>
    <option value='Battle Master'>Battle Master</option>
    <option value='Brute'>Brute</option>
    <option value='Cavalier'>Cavalier</option>
    <option value='Champion'>Champion</option>
    <option value='Echo Knight'>Echo Knight</option>
    <option value='Knight'>Knight</option>
    <option value='Monster'>Monster Hunter</option>
    <option value='Psychic'>Psychic Warrior</option>
    <option value='Purple'>Purple Dragon Knight</option>
    <option value='Rune Knight'>Rune Knight</option>
    <option value='Samurai'>Samurai</option>
    <option value='Scout'>Scout</option>
    <option value='Sharpshooter'>Sharpshooter</option>
    <option value='' disabled></option>
    <option value='monk' disabled>Monk</option>
    <option value='Astral Self'>Astral Self</option>
    <option value='Drunken Master'>Drunken Master</option>
    <option value='Four Elements'>Four Elements</option>
    <option value='Kensei'>Kensei</option>
    <option value='Long Death'>Long Death</option>
    <option value='Mercy'>Mercy</option>
    <option value='Open Hand'>Open Hand</option>
    <option value='Shadow'>Shadow</option>
    <option value='Sun Soul'>Sun Soul</option>
    <option value='Tranquility'>Tranquility</option>
    <option value='' disabled></option>
    <option value='mysti' disabled>Mystic</option>
    <option value='Avatar'>Avatar</option>
    <option value='Awakened'>Awakened</option>
    <option value='Immmortal'>Immortal</option>
    <option value='Nomad'>Nomad</option>
    <option value='Soul knife'>Soul Knife</option>
    <option value='Wu Jen'>Wu Jen</option>
    <option value=''disabled></option>
    <option value='paladin'disabled>Paladin</option>
    <option value='Ancients'>Ancients</option>
    <option value='Conquest'>Conquest</option>
    <option value='Crown'>Crown</option>
    <option value='Devotion'>Devotion</option>
    <option value='Heroism'>Heroism</option>
    <option value='Oathbreaker'>Oathbreaker</option>
    <option value='Redemption'>Redemption</option>
    <option value='Treachery'>Treachery</option>
    <option value='Vengence'>Vengence</option>
    <option value='Watchers'>Watchers</option>
    <option value='' disabled></option>
    <option value='range' disabled>Ranger</option>
    <option value='Beast Master'>Beast Master</option>
    <option value='Deepstalker'>Deepstalker</option>
    <option value='Gloomstalker'>Gloomstalker</option>
    <option value='Horizon Walker'>Horizon Walker</option>
    <option value='Hunter'>Hunter</option>
    <option value='Monster Slayer'>Monster Slayer</option>
    <option value='Primeval Guardian'>Primeval Guardian</option>
    <option value='Spelless'>Spelless</option>
    <option value='Swarmkeeper'>Swarmkeeper</option>
    <option value='' disabled></option>
    <option value='rogue' disabled>Rogue</option>
    <option value='Arcane Trickster'>Arcane Trickster</option>
    <option value='Assassin'>Assassin</option>
    <option value='Inquisitive'>Inquisitive</option>
    <option value='Masterming'>Mastermind</option>
    <option value='Revived'>Revived</option>
    <option value='Scout'>Scout</option>
    <option value='Soul Knife'>Soul Knife</option>
    <option value='Swashbuckler'>Swashbuckler</option>
    <option value='Thief'>Thief</option>
    <option value='' disabled></option>
    <option value='sorce'disabled>Sorcerer</option>
    <option value='Aberrant Mind'>Aberrant Mind</option>
    <option value='Divine Soul'>Divine Soul</option>
    <option value='Draconic Bloodline'>Draconic Bloodline</option>
    <option value='Favored Soul'>Favored Soul</option>
    <option value='Giant Soul'>Giant Soul</option>
    <option value='Pheonix Sorcery'>Pheonix Sorcery</option>
    <option value='Pyromancer'>Pyromancer</option>
    <option value='Sea Sorcery'>Sea Sorcery</option>
    <option value='Shadow Sorcery'>Shadow Sorcery</option>
    <option value='Stone Sorcery'>Stone Sorcery</option>
    <option value='Storm Sorcery'>Storm Sorcery</option>
    <option value='Wild Magic'>Wild Magic</option>
    <option value='' disabled></option>
    <option value='warlo' disabled>Warlock</option>
    <option value='Archfey'>Archfey</option>
    <option value='Celestial'>Celestial</option>
    <option value='Fiend'>Fiend</option>
    <option value='Ghost in the Machine'>Ghost in the Machine</option>
    <option value='Great Old One'>Great Old One</option>
    <option value='Hexblade'>Hexblade</option>
    <option value='Lurker in the Deep'>Lurker in the Deep</option>
    <option value='Novle Genie'>Novle Genie</option>
    <option value='Raven Queen'>Raven Queen</option>
    <option value='Seeker'>Seeker</option>
    <option value='Undying'>Undying</option>
    <option value='Undying Light'>Undying Light</option>
    <option value='' disabled></option>
    <option value='wizar' disabled>Wizard</option>
    <option value='Abjuration'>Abjuration</option>
    <option value='Artificer'>Artificer</option>
    <option value='Bladesinging'>Bladesinging</option>
    <option value='Chronurgist'>Chronurgist</option>
    <option value='Conjuration'>Conjuration</option>
    <option value='Divination'>Divination</option>
    <option value='Enchantment'>Enchantment</option>
    <option value='Evocation'>Evocation</option>
    <option value='Graviturgist'>Graviturgist</option>
    <option value='Illusion'>Illusion</option>
    <option value='Invention'>Invetion</option>
    <option value='Lore Master'>Lore Mastery</option>
    <option value='Necromancy'>Necromancy</option>
    <option value='Onomancy'>Onomancy</option>
    <option value='Psionics'>Psionics</option>
    <option value='Technomancy'>Technomancy</option>
    <option value='Thurgy'>Thurgy</option>
    <option value='Transmutatino'>Transmutation</option>
    <option value='War Magic'>War Magic</option>
    
    "
?>