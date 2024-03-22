<!-- There are textarea's here, insert the db variable before the </textarea> -->
<!--There are "values=''" in the inputs of the character name, hp, and as well as the abilities(str, dex, etc.) make sure to add the db variables to those values-->
<?php
session_start();

		$sc = $_SESSION["spellcasting"];
        $sa = $_SESSION["spell_ability"];
        $sat = $_SESSION["spell_atk"];
        $ss = $_SESSION["spell_save"];
        $sfo = $_SESSION["spell_focus"];
        $ct = $_SESSION["cantrips"];
		$m = $_SESSION["max"];
        $sf = $_SESSION["spell_feature"];
        $sco = $_SESSION["spell_component"];

        $s1 = $_SESSION["spell_lvl1"];
        $ss1 = $_SESSION["spell_slots1"];
        $sss1 = $_SESSION["spell_slotused1"];

        $s2 = $_SESSION["spell_lvl2"];
        $ss2 = $_SESSION["spell_slots2"];
        $sss2 = $_SESSION["spell_slotused2"];

        $s3 = $_SESSION["spell_lvl3"];
        $ss3 = $_SESSION["spell_slots3"];
        $sss3 = $_SESSION["spell_slotused3"];

        $s4 = $_SESSION["spell_lvl4"];
        $ss4 = $_SESSION["spell_slots4"];
        $sss4 = $_SESSION["spell_slotused4"];

        $s5 = $_SESSION["spell_lvl5"];
        $ss5 = $_SESSION["spell_slots5"];
        $sss5 = $_SESSION["spell_slotused5"];

        $s6 = $_SESSION["spell_lvl6"];
        $ss6 = $_SESSION["spell_slots6"];
        $sss6 = $_SESSION["spell_slotused6"];

        $s7 = $_SESSION["spell_lvl7"];
        $ss7 = $_SESSION["spell_slots7"];
        $sss7 = $_SESSION["spell_slotused7"];

        $s8 = $_SESSION["spell_lvl8"];
        $ss8 = $_SESSION["spell_slots8"];
        $sss8 = $_SESSION["spell_slotused8"];

        $s9 = $_SESSION["spell_lvl9"];
        $ss9 = $_SESSION["spell_slots9"];
        $sss9 = $_SESSION["spell_slotused9"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Skills</title>
	<link rel="stylesheet" type="text/css" href="../../Case Study/styles/spells.css">
</head>
<body>
	<nav class="sidebar-navigation">
		<ul>
			<li class="active">
				<i class="fa fa-share-alt"><a href="CharCreate_v2_v.php"><img src="../../Case Study/images/CharBasic.png" width="65px" height="65px"></a></i>
				<span class="tooltip">Character Basic</span>
			</li>
			<li>
				<i class="fa fa-hdd-o"><a href="CharBackground_v.php"><img src="../../Case Study/images/Book.png" width="65px" height="65px"></a></i>
				<span class="tooltip">Character Background</span>
			</li>
			<li>
				<i class="fa fa-newspaper-o"><a href="SkillsEquip_v.php"><img src="../../Case Study/images/Bag.png" width="65px" height="65px"></a></i>
				<span class="tooltip">Skills and Equipment</span>
			</li>
			<li>
				<i class="fa fa-print"><a><img src="../../Case Study/images/Wand.png" width="65px" height="65px"></a></i>
				<span class="tooltip">Spells</span>
			</li>
			<li>
				<i class="fa fa-sliders"><a href="Notes_v.php"><img src="../../Case Study/images/Notes.png" width="65px" height="65px"></a></i>
				<span class="tooltip">Notes</span>
			</li>
			<li>
				<i class="fa fa-sliders"><a href="CharViewExit.php"><img src="../../Case Study/images/CharSelect.png" width="65px" height="65px"></a></i>
				<span class="tooltip">Back to Character Select</span>
			</li>
		</ul>
	</nav>

	<h1><label>Spell Slots</label></h1>
		<div class="header">
			<table class="center">
				<tr>
					<th><label>Spellcasting Class</label>
						<td><input type="textbox" name="spell_class" value="<?php echo "$sc"?>" readonly></td>
					</th>
					<th><label>Spellcasting ability</label>
						<td><input type="textbox" name="spell_ability" value="<?php echo "$sa"?>" readonly></td>
					</th>
					<th><label>Spell Atk Bonus</label>
						<td><input type="textbox" name="spell_atk" value="<?php echo "$sat"?>" readonly></td>
					</th>
					<th><label>Spell Recovery Period</label>
						<td><input type="textbox" name="spell_save" value="<?php echo "$ss"?>" readonly></td>
					</th>
					<th><label>Spellcasting Focus</label>
						<td><input type="textbox" name="spell_focus" value="<?php echo "$sf"?>" readonly></td>
					</th>
				</tr>
			</table>
		</div>

		<div class="cont">
			<div class="column2">
				<h2 style="color:#aaaaaa;">Cantrips <input type="textbox" name="max_can" placeholder="MAX" class="maxin" readonly></h2> 
				<textarea class="textarea1" name="cantext" rows="10" cols="30" disabled><?php echo "$ct"?></textarea>
			</div>
	
			<div class="column2">
				<h2 style="color:#aaaaaa;">Spellcasting Features</h2>
				<textarea class="textarea1" name="cantext" rows="10" cols="30" disabled><?php echo "$sf"?></textarea>
			</div>
			<div class="column2">
				<h2 style="color:#aaaaaa;">Component Pouch Inventory</h2>
				<textarea class="textarea1" name="cantext" rows="10" cols="30" disabled><?php echo "$sco"?></textarea>
			</div>
			<div class="column2">
				<h2 style="color:#aaaaaa;">Lvl 1<input type="textbox" name="slots1" placeholder="slots" value="<?php echo "$ss1"?>" readonly><input type="textbox" name="slotused1" placeholder="slots used" value="<?php echo "$sss1"?>" readonly></h2> 
				<textarea class="textarea1" name="cantext" rows="10" cols="30" disabled><?php echo "$s1"?></textarea>
			</div>
			<div class="column2">
				<h2 style="color:#aaaaaa;">Lvl 2<input type="textbox" name="slots2" placeholder="slots" value="<?php echo "$ss2"?>" readonly><input type="textbox" name="slotused2" placeholder="slots used" value="<?php echo "$sss2"?>" readonly></h2> 
				<textarea class="textarea1" name="cantext" rows="10" cols="30" disabled><?php echo "$s2"?></textarea>
			</div>
			<div class="column2">
				<h2 style="color:#aaaaaa;">Lvl 3<input type="textbox" name="slots3" placeholder="slots" value="<?php echo "$ss3"?>" readonly><input type="textbox" name="slotused3" placeholder="slots used" value="<?php echo "$sss3"?>" readonly></h2> 
				<textarea class="textarea1" name="cantext" rows="10" cols="30" disabled><?php echo "$s3"?></textarea>
			</div> 
			<div class="column2">
				<h2 style="color:#aaaaaa;">Lvl 4<input type="textbox" name="slots4" placeholder="slots" value="<?php echo "$ss4"?>" readonly><input type="textbox" name="slotused4" placeholder="slots used" value="<?php echo "$sss4"?>" readonly></h2> 
				<textarea class="textarea1" name="cantext" rows="10" cols="30" disabled><?php echo "$s4"?></textarea>
			</div>
			<div class="column2">
				<h2 style="color:#aaaaaa;">Lvl 5<input type="textbox" name="slots5" placeholder="slots" value="<?php echo "$ss5"?>" readonly><input type="textbox" name="slotused5" placeholder="slots used" value="<?php echo "$sss5"?>" readonly></h2> 
				<textarea class="textarea1" name="cantext" rows="10" cols="30" disabled><?php echo "$s5"?></textarea>
			</div>
			<div class="column2">
				<h2 style="color:#aaaaaa;">Lvl 6<input type="textbox" name="slots6" placeholder="slots" value="<?php echo "$ss6"?>" readonly><input type="textbox" name="slotused6" placeholder="slots used" value="<?php echo "$sss6"?>" readonly></h2> 
				<textarea class="textarea1" name="cantext" rows="10" cols="30" disabled><?php echo "$s6"?></textarea>
			</div>
			<div class="column2">
				<h2 style="color:#aaaaaa;">Lvl 7<input type="textbox" name="slots7" placeholder="slots" value="<?php echo "$ss7"?>" readonly><input type="textbox" name="slotused7" placeholder="slots used" value="<?php echo "$sss7"?>" readonly></h2> 
				<textarea class="textarea1" name="cantext" rows="10" cols="30" disabled><?php echo "$s7"?></textarea>
			</div>
			<div class="column2">
				<h2 style="color:#aaaaaa;">Lvl 8<input type="textbox" name="slots8" placeholder="slots" value="<?php echo "$ss8"?>" readonly><input type="textbox" name="slotused8" placeholder="slots used" value="<?php echo "$sss8"?>" readonly></h2> 
				<textarea class="textarea1" name="cantext" rows="10" cols="30" disabled><?php echo "$s8"?></textarea>
			</div>
			<div class="column2">
				<h2 style="color:#aaaaaa;">Lvl 9<input type="textbox" name="slots9" placeholder="slots" value="<?php echo "$ss9"?>" readonly><input type="textbox" name="slotused9" placeholder="slots used" value="<?php echo "$sss9"?>" readonly></h2> 
				<textarea class="textarea1" name="cantext" rows="10" cols="30" disabled><?php echo "$s9"?></textarea>
			</div>
		</div>
		<button type="submit" name="submit" class="butt" onclick="location.href='Notes_v.php'">Next Page</button>
		

</body>
</html>