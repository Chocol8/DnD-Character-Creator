<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Character Creator</title>
    <link rel="stylesheet" type="text/css" href="../Case Study/styles/CharCreate_style.css">
    <link rel="stylesheet" type="text/css" href="../Case Study/includes/Classes_n_subclass_view.css">
</head>

<body>
    <nav class="sidebar-navigation">
        <ul>
            <li class="active">
                <i class="fa fa-share-alt"><a><img src="../Case Study/images/CharBasic.png" width="65px" height="65px"></a></i>
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
                <i class="fa fa-print"><a href="spells.php"><img src="../Case Study/images/Wand.png" width="65px" height="65px"></a></i>
                <span class="tooltip">Spells</span>
            </li>
            <li>
                <i class="fa fa-sliders"><a href="notes.php"><img src="../Case Study/images/Notes.png" width="65px" height="65px"></a></i>
                <span class="tooltip">Notes</span>
            </li>
            <li>
                <i class="fa fa-sliders"><a href="CharSelect.php"><img src="../Case Study/images/CharSelect.png" width="65px" height="65px"></a></i>
                <span class="tooltip">Back to Character Select</span>
            </li>
        </ul>
    </nav>
    <form action="character_creation/Charcreate1.php" method="post">
        <div class="bas1">
            <div>
                <input type="text" name="cName" placeholder="Character Name" class="cname">
            </div>
            <div class="hp">
                <label name="hp">HP</label><br>
                <input type="number" name="hp" class="hp1">
            </div>
            <div class="race">
                <label name="race">Race</label><br>
                <select name="race">
                    <?php include "../Case Study/includes/RaceOptions.php" ?>
                </select>
                <div>
                    <div class="backg">
                        <label name="backg">Background</label>
                        <select name="backg" class="backg1">
                            <?php include "../Case Study/includes/BackgOptions.php" ?>
                        </select>
                    </div>
                    <div class="lvl">
                        <label name="lvl">Level</label><br>
                        <select name="lvl" class="lvls">
                            <?php include "../Case Study/includes/lvls.php" ?>
                        </select>
                    </div>
                </div>
                <div class="stat">
                    <div class="statT">
                        <label>Strength</label><br>
                        <div class="plus">
                            <?php include "../Case Study/includes/AbilityModS.php" ?>
                        </div>
                        <input type="number" name="charS" class="n-n">
                    </div>
                    <div class="statT">
                        <label>Dexterity</label>
                        <div class="plus">
                            <?php include "../Case Study/includes/AbilityModD.php" ?>
                        </div>
                        <input type="number" name="charD" class="n-n">
                    </div>
                    <div class="statM">
                        <label>Constitution</label>
                        <div class="plus">
                            <?php include "../Case Study/includes/AbilityModC.php" ?>
                        </div>
                        <input type="number" name="charC" class="n-n">
                    </div>
                    <div class="statM">
                        <label>Intelligence</label>
                        <div class="plus">
                            <?php include "../Case Study/includes/AbilityModI.php" ?>
                        </div>
                        <input type="number" name="charI" class="n-n">
                    </div>
                    <div class="statB">
                        <label>Wisdom</label>
                        <div class="plus">
                            <?php include "../Case Study/includes/AbilityModW.php" ?>
                        </div>
                        <input type="number" name="charW" class="n-n">
                    </div>
                    <div class="statB">
                        <label>Charisma</label>
                        <div class="plus">
                            <?php include "../Case Study/includes/AbilityModCh.php" ?>
                        </div>
                        <input type="number" name="charCh" class="n-n">
                    </div>
                </div>
                <div class="class">
                    <div>
                        <label name="class">Class</label><br>
                        <select name="class" id="class" onchange="ShowClass()">
                            <?php include "../Case Study/includes/Classes.php" ?>
                        </select>
                    </div>
                    <div class="subc">
                        <label name="dom">Subclasses</label><br>
                        <select name="dom" id="dom" class="subc1" onchange="ShowSubclass()">
                            <?php include "../Case Study/includes/Subclasses.php" ?>
                        </select>
                    </div>

                    <div class="show_class">
                        <h1 id="ShowClass"></h1>
                        <h2 id="ShowSubClass"></h2>
                        <script>
                            function ShowClass() {
                                var selObj = document.getElementById("class").value;
                                document.getElementById("ShowClass").innerHTML = selObj;
                            }

                            function ShowSubclass() {
                                var selObj2 = document.getElementsById("dom").value;
                                document.getElementById("ShowSubClass").innerHTML = selObj2;
                            }
                        </script>
                    </div>

                </div>
                <div class="prof">
                    <label name="proficiencies" class="profT">Proficiencies</label>
                    <div class="prof1">
                        <input type="checkbox" name="prof1" class="check">
                        <label name="prof1">Acrobatics</label><br>
                        <input type="checkbox" name="prof2">
                        <label name="prof2">Animal Handling</label><br>
                        <input type="checkbox" name="prof3">
                        <label name="prof3">Arcana</label><br>
                        <input type="checkbox" name="prof4">
                        <label name="prof4">Athletics</label><br>
                        <input type="checkbox" name="prof5">
                        <label name="prof5">Deception</label><br>
                        <input type="checkbox" name="prof6">
                        <label name="prof6">Endurance</label><br>
                        <input type="checkbox" name="prof7">
                        <label name="prof7">History</label><br>
                        <input type="checkbox" name="prof8">
                        <label name="prof8">Insight</label><br>
                        <input type="checkbox" name="prof9">
                        <label name="prof9">Intimidation</label><br>
                        <input type="checkbox" name="prof10">
                        <label name="prof10">Investigation</label><br>
                    </div>
                    <div class="prof2">
                        <input type="checkbox" name="prof11">
                        <label name="prof11">Medicine</label><br>
                        <input type="checkbox" name="prof12">
                        <label name="prof12">Nature</label><br>
                        <input type="checkbox" name="prof13">
                        <label name="prof13">Perception</label><br>
                        <input type="checkbox" name="prof14">
                        <label name="prof14">Performance</label><br>
                        <input type="checkbox" name="prof15">
                        <label name="prof15">Persuasion</label><br>
                        <input type="checkbox" name="prof16">
                        <label name="prof16">Religion</label><br>
                        <input type="checkbox" name="prof17">
                        <label name="prof17">Sleight of Hand</label><br>
                        <input type="checkbox" name="prof18">
                        <label name="prof18">Stealth</label><br>
                        <input type="checkbox" name="prof19">
                        <label name="prof19">Streetwise</label><br>
                        <input type="checkbox" name="prof20">
                        <label name="prof20">Survival</label><br>
                    </div>
                </div>
                <button type="submit" name="submit2">Submit</button>
    </form>
</body>

</html>