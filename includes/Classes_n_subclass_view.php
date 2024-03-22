<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<br>
	<br>

	<?php	
		if(isset($_POST['submit2'])){
    		$class = $_POST['class'];
    		$subclass = $_POST['dom'];
    		
    		echo "<p style='font-size:30px; color:#aaaaaa;'>$class</p>"."<br><br>";

    		if($class == "Artificer"){
    			echo "+Int"."<br></p>";
    			echo "Channel your inner mad scientist or Tony Stark! Artificers are those who spend most of their free time creating all sorts of artifacts, weapons and more. This class shines when played by imaginative players, as it requires you to describe your spells as being “cast” or applied by tiny tools or creations. Playing this makes you the brain of the group, the problem solver, as well as the weird strategist that infuses recordings in mundane objects and creates magical ones.";
    		}
    		elseif ($class == "Barbarian") {
    			echo "+Str"."<br>";
    			echo "+Con"."<br><br>";
    			echo  "Filled with their destructive rage and primal instincts, the barbarian is the class you choose if you want to be the meat shield in the front line dealing great amounts of damage. Who needs a shield when you can stand your foes’ puny attacks with your hardened skin and/or high evasiveness?";
    		}
    		elseif ($class == "Bard") {
    			echo "+Cha"."<br><br>";
    			echo  "A true jack of all trades; a bard can cover great amounts of ground when speaking about what they are able to do. A performer at heart, an inspiration to its allies, but above all a foul-mouthed to its foes. With its great charisma, his/her voice becomes its greatest weapon.";
    		}
    		elseif ($class == "Cleric") {
    			echo "+Wis"."<br><br>";
    			echo  "As well as with bards, clerics cover a wide amount of possibilities depending on the god you choose to follow. They are high spirited servants of their deities and follow their domains to choose a way of life. Both a warrior and spellcaster, they are able to cover practically any role in a party. Depending on their subclass, their Channel Divinity ability acts in different ways, granting direct powers from their gods.";
    		}
    		elseif ($class == "Druid") {
    			echo "+Wis"."<br><br>";
    			echo  "Preservers of balance and nature’s warriors, the druids aid their party members by using great support spells, as well as heavy damage dealing ones. They speak the language of the flora and fauna, as well as they can shapeshift into a wide amount of beasts for combat or situational purposes.";
    		}
    		elseif ($class == "Fighter") {
    			echo "+Str or Dex"."<br>";
    			echo "+Con"."<br><br>";
    			echo  "What does a fighter do best? Well, fight of course. A really versatile class, as it can work in numerous ways. Add the fighting style and you can choose to have a one handed weapon accompanied by a shield, have a two handed weapon, two one handed ones (dual wielding), a ranged weapon and more! Once you’ve got that decided, ready yourself to start demolishing your foes, be it with your mighty strength or dexterous precision!";
    		}
    		elseif ($class == "Monk") {
    			echo "+Dex"."<br>";
    			echo "+Wis"."<br><br>";
    			echo  "Martial artists who can channel their Ki to do impressive feats as if they were magic users. No armor is necessary, just dexterity and the power of your mind. Deflect missiles thrown at you, changing the target to your enemies, move at the speed of the wind and fill your foes’ faces with a flurry blows.";
    		}
    		elseif ($class == "Mystic") {
    			echo "+Int"."<br>";
    			echo "+Wis"."<br><br>";
    			echo  "A mystic who studied under a master worked as a virtual slave, toiling away at mundane tasks in return for the occasional lesson or cryptic insight. When mystics finally master their power, they return to the world to broaden their horizons and practice their craft.";
    		}
    		elseif ($class == "Paladin") {
    			echo "+Cha"."<br>";
    			echo "+Str or Dex"."<br><br>";
    			echo  "A paladin is a person guided by an oath, their force of will and devotion so strong they are granted the ability to cast spells to smite their foes. They fight for justice and righteousness, with the idea of following their oath and ideals to the very end. For this, they use heavy armor to be front liners and protect their allies.";
    		}
    		elseif ($class == "Ranger") {
    			echo "+Dex"."<br>";
    			echo "+Wis"."<br><br>";
    			echo  "A natural explorer seeking adventures, who on their way found a special hatred towards a certain beast or monster. Able to master any fighting style as long as they don’t involve heavy weapons or armor. Spellcasters by default, due to their connection with nature and/or the Feywild, they are excellent scouts and allies to have by your side.";
    		}
    		elseif ($class == "Rogue") {
    			echo "+Dex"."<br><br>";
    			echo  "Let’s get shady, grab a dagger and start stabbing. Rogues excel at sneaking around, scouting ahead, being dexterous and about everything you would expect a thief to be good at. In dungeons, they can help their party by deactivating traps or opening locked doors. Don’t expect them to wear much armor, nor be able to carry heavy stuff; but were your task to need some delicacy or swashbuckling, you’ve found the right person.";
    		}
    		elseif ($class == "Sorcerer") {
    			echo "+Cha"."<br>";
    			echo "+Con"."<br><br>";
    			echo  "Due to some random or pre-established occurrence, magic runs through you. This means you can “cheat” in a certain way to be able to use magic at will, instead of having to learn how to cast it. Sorcerers are also equipped with a pool of magic they get their sorcery points from, letting them twist spells to their will in different ways.";
    		}
    		elseif ($class == "Warlock") {
    			echo "+Cha"."<br>";
    			echo "+Con"."<br><br>";
    			echo  "Warlocks make pacts with extremely powerful beings, who don’t mind lending some power as they have so much they don’t even notice. However, it all comes with a price: There’s a reason this entity decided to accept the pact, and you might need to do some stuff to maintain the accord. Decide whether you want to have a big spellbook full of incantations, a strange summonable weapon or weird servants. Will you perish in the way to becoming an eldritch master?";
    		}
    		elseif ($class == "Wizard") {
    			echo "+Int"."<br><br>";
    			echo  "Wizards decide to go in adventures to further their knowledge. The great world in front of them has thousands of spells for you to learn and master. With a spellbook at hand, they will look for or buy them to become a greater spellcaster. Just transcribe them to the book and you’ll understand why wizards are such a versatile class. The amount of spells they can learn greatly surpasses all other classes’ lists.";
    		}
    	
    		echo "<br><br>";
    		echo "Subclass: ".$subclass;

			} 
	?>
	
	
</html>