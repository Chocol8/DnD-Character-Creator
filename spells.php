<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Spells</title>
	<link rel="stylesheet" type="text/css" href="../Case Study/styles/spells.css">
</head>

<body>
	<nav class="sidebar-navigation">
		<ul>
			<li class="active">
				<i class="fa fa-share-alt"><a href="CharCreate_v2.php"><img src="../Case Study/images/CharBasic.png" width="65px" height="65px"></a></i>
				<span class="tooltip">Character Basic</span>
			</li>
			<li>
				<i class="fa fa-hdd-o"><a href="CharBackground.php"><img src="../Case Study/images/Book.png" width="65px" height="65px"></a></i>
				<span class="tooltip">Character Background</span>
			</li>
			<li>
				<i class="fa fa-newspaper-o"><a href="SkillsEquip.php"><img src="../Case Study/images/Bag.png" width="65px" height="65px"></a></i>
				<span class="tooltip">Skills and Equipment</span>
			</li>
			<li>
				<i class="fa fa-print"><a href=""><img src="../Case Study/images/Wand.png" width="65px" height="65px"></a></i>
				<span class="tooltip">Spells</span>
			</li>
			<li>
				<i class="fa fa-sliders"><a href="Notes.php"><img src="../Case Study/images/Notes.png" width="65px" height="65px"></a></i>
				<span class="tooltip">Notes</span>
			</li>
			<li>
				<i class="fa fa-sliders"><a href="CharSelect.php"><img src="../Case Study/images/CharSelect.png" width="65px" height="65px"></a></i>
				<span class="tooltip">Back to Character Select</span>
			</li>
		</ul>
	</nav>

	<h1><label>Spell Slots</label></h1>
	<form method="post" action="character_creation/Charcreate4.php">
		<div class="header">
			<table class="center">
				<tr>
					<th><label>Spellcasting Class</label>
					<td><input type="number" name="spell_class"></td>
					</th>
					<th><label>Spellcasting ability</label>
					<td><input type="number" name="spell_ability"></td>
					</th>
					<th><label>Spell Atk Bonus</label>
					<td><input type="number" name="spell_atk"></td>
					</th>
					<th><label>Spell Save DC</label></th>
					<th><label>Spell Recovery Period</label>
					<td><input type="number" name="spell_save"></td>
					</th>
					<th><label>Spellcasting Focus</label>
					<td><input type="number" name="spell_focus"></td>
					</th>
				</tr>
			</table>
		</div>

		<div class="cont">
			<div class="column2">
				<h2 style="color:#aaaaaa;">Cantrips <input type="number" name="max_can" placeholder="MAX" class="maxin"></h2>
				<textarea class="textarea1" name="cantext" rows="10" cols="30"></textarea>
			</div>
			<div class="column2">
				<h2 style="color:#aaaaaa;">Spellcasting Features</h2>
				<textarea class="textarea1" name="spellfeat" rows="10" cols="30"></textarea>
			</div>
			<div class="column2">
				<h2 style="color:#aaaaaa;">Component Pouch Inventory</h2>
				<textarea class="textarea1" name="compou" rows="10" cols="30"></textarea>
			</div>
			<div class="column2">
				<h2 style="color:#aaaaaa;">Lvl 1<input type="number" name="slots1" placeholder="slots"><input type="number" name="slotused1" placeholder="slots used"></h2>
				<textarea class="textarea1" name="lvl1" rows="10" cols="30"></textarea>
			</div>
			<div class="column2">
				<h2 style="color:#aaaaaa;">Lvl 2<input type="number" name="slots2" placeholder="slots"><input type="number" name="slotused2" placeholder="slots used"></h2>
				<textarea class="textarea1" name="lvl2" rows="10" cols="30"></textarea>
			</div>
			<div class="column2">
				<h2 style="color:#aaaaaa;">Lvl 3<input type="number" name="slots3" placeholder="slots"><input type="number" name="slotused3" placeholder="slots used"></h2>
				<textarea class="textarea1" name="lvl3" rows="10" cols="30"></textarea>
			</div>
			<div class="column2">
				<h2 style="color:#aaaaaa;">Lvl 4<input type="number" name="slots4" placeholder="slots"><input type="number" name="slotused4" placeholder="slots used"></h2>
				<textarea class="textarea1" name="lvl4" rows="10" cols="30"></textarea>
			</div>
			<div class="column2">
				<h2 style="color:#aaaaaa;">Lvl 5<input type="number" name="slots5" placeholder="slots"><input type="number" name="slotused5" placeholder="slots used"></h2>
				<textarea class="textarea1" name="lvl5" rows="10" cols="30"></textarea>
			</div>
			<div class="column2">
				<h2 style="color:#aaaaaa;">Lvl 6<input type="number" name="slots6" placeholder="slots"><input type="number" name="slotused6" placeholder="slots used"></h2>
				<textarea class="textarea1" name="lvl6" rows="10" cols="30"></textarea>
			</div>
			<div class="column2">
				<h2 style="color:#aaaaaa;">Lvl 7<input type="number" name="slots7" placeholder="slots"><input type="number" name="slotused7" placeholder="slots used"></h2>
				<textarea class="textarea1" name="lvl7" rows="10" cols="30"></textarea>
			</div>
			<div class="column2">
				<h2 style="color:#aaaaaa;">Lvl 8<input type="number" name="slots8" placeholder="slots"><input type="number" name="slotused8" placeholder="slots used"></h2>
				<textarea class="textarea1" name="lvl8" rows="10" cols="30"></textarea>
			</div>
			<div class="column2">
				<h2 style="color:#aaaaaa;">Lvl 9<input type="number" name="slots9" placeholder="slots"><input type="number" name="slotused9" placeholder="slots used"></h2>
				<textarea class="textarea1" name="lvl9" rows="10" cols="30"></textarea>
			</div>
		</div>
		<button type="submit" name="submit" class="sub">Next Page</button>
	</form>


</body>

</html>