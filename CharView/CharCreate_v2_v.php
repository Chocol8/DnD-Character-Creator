<!DOCTYPE html>
<?php
//$check is for the proficiencies, make sure to set the db variable for proficiencies as check
session_start();
$check = 1;

//There are "values=''" in the inputs of the character name, hp, and as well as the abilities(str, dex, etc.) make sure to add the db variables to those values
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Character Creator</title>
    <link rel="stylesheet" type="text/css" href="../../Case Study/styles/CharCreate_style.css">
    <link rel="stylesheet" type="text/css" href="../../Case Study/includes/Classes_n_subclass_view.css">
</head>

<body>
    <nav class="sidebar-navigation">
        <ul>
            <li class="active">
                <i class="fa fa-share-alt"><a><img src="../../Case Study/images/CharBasic.png" width="65px" height="65px"></a></i>
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
                <i class="fa fa-print"><a href="spells_v.php"><img src="../../Case Study/images/Wand.png" width="65px" height="65px"></a></i>
                <span class="tooltip">Spells</span>
            </li>
            <li>
                <i class="fa fa-sliders"><a href="notes_v.php"><img src="../../Case Study/images/Notes.png" width="65px" height="65px"></a></i>
                <span class="tooltip">Notes</span>
            </li>
            <li>
                <i class="fa fa-sliders"><a href="CharViewExit.php"><img src="../../Case Study/images/CharSelect.png" width="65px" height="65px"></a></i>
                <span class="tooltip">Back to Character Select</span>
            </li>
        </ul>
    </nav>
    <div class="bas1">
        <div>
            <input type="text" name="cName" class="cname" value= <?php echo $_SESSION["char_name"] ?> readonly>
        </div>
        <div class="hp">
            <label name="hp">HP</label><br>
            <input type="number" name="hp" class="hp1" value= <?php echo $_SESSION["char_hp"] ?> readonly>
        </div>
        <div class="race">
            <label name="race">Race</label><br>
            <select name="race" disabled>
                <?php include "../../Case Study/includes/RaceOptions.php" ?>
            </select>
            <div>
                <div class="backg">
                    <label name="backg">Background</label>
                    <select name="backg" class="backg1" disabled>
                        <?php include "../../Case Study/includes/BackgOptions.php" ?>
                    </select>
                </div>
                <div class="lvl">
                    <label name="lvl">Level</label><br>
                    <select name="lvl" class="lvls" disabled>
                        <?php include "../../Case Study/includes/lvls.php" ?>
                    </select>
                </div>
            </div>
            <div class="stat">
                <div class="statT">
                    <label>Strength</label>
                    <input type="number" name="charS" class="n-n" value=<?php echo $_SESSION["char_str"] ?> readonly>
                </div>
                <div class="statT">
                    <label>Dexterity</label>
                    <input type="number" name="charD" class="n-n" value=<?php echo $_SESSION["char_dex"] ?> readonly>
                </div>
                <div class="statM">
                    <label>Constitution</label>
                    <input type="number" name="charC" class="n-n" value=<?php echo $_SESSION["char_con"] ?> readonly>
                </div>
                <div class="statM">
                    <label>Intelligence</label>
                    <input type="number" name="charI" class="n-n" value=<?php echo $_SESSION["char_int"] ?> readonly>
                </div>
                <div class="statB">
                    <label>Wisdom</label>
                    <input type="number" name="charW" class="n-n" value=<?php echo $_SESSION["char_wis"] ?> readonly>
                </div>
                <div class="statB">
                    <label>Charisma</label>
                    <input type="number" name="charCh" class="n-n" value=<?php echo $_SESSION["char_cha"] ?> readonly>
                </div>
            </div>
            <div class="class">
                <div>
                    <label name="class">Class</label><br>
                    <select name="class" disabled>
                        <?php include "../../Case Study/includes/Classes.php" ?>
                    </select>
                </div>
                <div class="subc">
                    <label name="dom">Subclasses</label><br>
                    <select name="dom" class="subc1" disabled>
                        <?php include "../../Case Study/includes/Subclasses.php" ?>
                    </select>
                </div>
            </div>
            <div class="prof">
                <label name="proficiencies" class="profT">Proficiencies</label>
                <div class="prof1">
                    <input type="checkbox" name="prof1" class="chkbx"<?php if ($_SESSION["prof1"] == $check) {
                                                            echo "checked";
                                                        } ?> onclick="return false">
                    <label name="prof1">Acrobatics</label><br>
                    <input type="checkbox" name="prof2" class="chkbx"<?php if ($_SESSION["prof2"] == $check) {
                                                            echo "checked";
                                                        } ?> onclick="return false">
                    <label name="prof2">Animal Handling</label><br>
                    <input type="checkbox" name="prof3" class="chkbx"<?php if ($_SESSION["prof3"] == $check) {
                                                            echo "checked";
                                                        } ?> onclick="return false">
                    <label name="prof3">Arcana</label><br>
                    <input type="checkbox" name="prof4" class="chkbx"<?php if ($_SESSION["prof4"] == $check) {
                                                            echo "checked";
                                                        } ?> onclick="return false">
                    <label name="prof4">Athletics</label><br>
                    <input type="checkbox" name="prof5" class="chkbx"<?php if ($_SESSION["prof5"] == $check) {
                                                            echo "checked";
                                                        } ?> onclick="return false">
                    <label name="prof5">Deception</label><br>
                    <input type="checkbox" name="prof6" class="chkbx"<?php if ($_SESSION["prof6"] == $check) {
                                                            echo "checked";
                                                        } ?> onclick="return false">
                    <label name="prof6">Endurance</label><br>
                    <input type="checkbox" name="prof7" class="chkbx"<?php if ($_SESSION["prof7"] == $check) {
                                                            echo "checked";
                                                        } ?> onclick="return false">
                    <label name="prof7">History</label><br>
                    <input type="checkbox" name="prof8" class="chkbx"<?php if ($_SESSION["prof8"] == $check) {
                                                            echo "checked";
                                                        } ?> onclick="return false">
                    <label name="prof8">Insight</label><br>
                    <input type="checkbox" name="prof9" class="chkbx"<?php if ($_SESSION["prof9"] == $check) {
                                                            echo "checked";
                                                        } ?> onclick="return false">
                    <label name="prof9">Intimidation</label><br>
                    <input type="checkbox" name="prof10" class="chkbx"<?php if ($_SESSION["prof10"] == $check) {
                                                                echo "checked";
                                                            } ?> onclick="return false">
                    <label name="prof10">Investigation</label><br>
                </div>
                <div class="prof2">
                    <input type="checkbox" name="prof11" class="chkbx"<?php if ($_SESSION["prof11"] == $check) {
                                                                echo "checked";
                                                            } ?> onclick="return false">
                    <label name="prof11">Medicine</label><br>
                    <input type="checkbox" name="prof12" class="chkbx"<?php if ($_SESSION["prof12"] == $check) {
                                                                echo "checked";
                                                            } ?> onclick="return false">
                    <label name="prof12">Nature</label><br>
                    <input type="checkbox" name="prof13" class="chkbx"<?php if ($_SESSION["prof13"] == $check) {
                                                                echo "checked";
                                                            } ?> onclick="return false">
                    <label name="prof13">Perception</label><br>
                    <input type="checkbox" name="prof14" class="chkbx"<?php if ($_SESSION["prof14"] == $check) {
                                                                echo "checked";
                                                            } ?> onclick="return false">
                    <label name="prof14">Performance</label><br>
                    <input type="checkbox" name="prof15" class="chkbx"<?php if ($_SESSION["prof15"] == $check) {
                                                                echo "checked";
                                                            } ?> onclick="return false">
                    <label name="prof15">Persuasion</label><br>
                    <input type="checkbox" name="prof16" class="chkbx"<?php if ($_SESSION["prof16"] == $check) {
                                                                echo "checked";
                                                            } ?> onclick="return false">
                    <label name="prof16">Religion</label><br>
                    <input type="checkbox" name="prof17" class="chkbx"<?php if ($_SESSION["prof17"] == $check) {
                                                                echo "checked";
                                                            } ?> onclick="return false">
                    <label name="prof17">Sleight of Hand</label><br>
                    <input type="checkbox" name="prof18" class="chkbx"<?php if ($_SESSION["prof18"] == $check) {
                                                                echo "checked";
                                                            } ?> onclick="return false">
                    <label name="prof18">Stealth</label><br>
                    <input type="checkbox" name="prof19" class="chkbx"<?php if ($_SESSION["prof19"] == $check) {
                                                                echo "checked";
                                                            } ?> onclick="return false">
                    <label name="prof19">Streetwise</label><br>
                    <input type="checkbox" name="prof20" class="chkbx"<?php if ($_SESSION["prof20"] == $check) {
                                                                echo "checked";
                                                            } ?> onclick="return false">
                    <label name="prof20">Survival</label><br>
                </div>
            </div>
        <button type="submit" name="submit2" class="sub" onclick="location.href='CharBackground_v.php'">Next Page</button>


</body>

</html>