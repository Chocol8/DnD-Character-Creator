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
    <form method="post" action="character_creation/CharCreate1.php">
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
                        <label>Strength</label>
                        <input type="number" name="charS" class="n-n" onchange="ams()">
                    </div>
                    <div class="statT">
                        <label>Dexterity</label>
                        <input type="number" name="charD" class="n-n">
                    </div>
                    <div class="statM">
                        <label>Constitution</label>
                        <input type="number" name="charC" class="n-n">
                    </div>
                    <div class="statM">
                        <label>Intelligence</label>
                        <input type="number" name="charI" class="n-n">
                    </div>
                    <div class="statB">
                        <label>Wisdom</label>
                        <input type="number" name="charW" class="n-n">
                    </div>
                    <div class="statB">
                        <label>Charisma</label>
                        <input type="number" name="charCh" class="n-n">
                    </div>
                </div>
                <div class="class">
                    <div>
                        <label name="class">Class</label><br>
                        <select name="class">
                            <?php include "../Case Study/includes/Classes.php" ?>
                        </select>
                    </div>
                    <div class="subc">
                        <label name="dom">Subclasses</label><br>
                        <select name="dom" class="subc1">
                            <?php include "../Case Study/includes/Subclasses.php" ?>
                        </select>
                    </div>
                </div>
                <div class="prof">
                    <label name="proficiencies" class="profT">Proficiencies</label>
                    <div class="prof1">
                        <input id="profhidden1" type="hidden" name="prof1" class="check" value="0">
                        <input id="prof1" type="checkbox" name="prof1" class="chkbx" value="1">
                        <label name="prof1">Acrobatics</label><br>

                        <input id="profhidden2" type="hidden" name="prof2" value="0">
                        <input id="prof2" type="checkbox" name="prof2" class="chkbx" value="1">
                        <label name="prof2">Animal Handling</label><br>

                        <input id="profhidden3" type="hidden" name="prof3" value="0">
                        <input id="prof3" type="checkbox" name="prof3" class="chkbx" value="1">
                        <label name="prof3">Arcana</label><br>

                        <input id="profhidden4" type="hidden" name="prof4" value="0">
                        <input id="prof4" type="checkbox" name="prof4" class="chkbx" value="1">
                        <label name="prof4">Athletics</label><br>

                        <input id="profhidden5" type="hidden" name="prof5" value="0">
                        <input id="prof5" type="checkbox" name="prof5" class="chkbx" value="1">
                        <label name="prof5">Deception</label><br>

                        <input id="profhidden6" type="hidden" name="prof6" value="0">
                        <input id="prof6" type="checkbox" name="prof6" class="chkbx" value="1">
                        <label name="prof6">Endurance</label><br>

                        <input id="profhidden7" type="hidden" name="prof7" value="0">
                        <input id="prof7" type="checkbox" name="prof7" class="chkbx" value="1">
                        <label name="prof7">History</label><br>

                        <input id="profhidden8" type="hidden" name="prof8" value="0">
                        <input id="prof8" type="checkbox" name="prof8" class="chkbx" value="1">
                        <label name="prof8">Insight</label><br>

                        <input id="profhidden9" type="hidden" name="prof9" value="0">
                        <input id="prof9" type="checkbox" name="prof9" class="chkbx" value="1">
                        <label name="prof9">Intimidation</label><br>

                        <input id="profhidden10" type="hidden" name="prof10" value="0">
                        <input id="prof10" type="checkbox" name="prof10" class="chkbx" value="1">
                        <label name="prof10">Investigation</label><br>

                    </div>
                    <div class="prof2">

                        <input id="profhidden11" type="hidden" name="prof11" value="0">
                        <input id="prof11" type="checkbox" name="prof11" class="chkbx" value="1">
                        <label name="prof11">Medicine</label><br>

                        <input id="profhidden12" type="hidden" name="prof12" value="0">
                        <input id="prof12" type="checkbox" name="prof12" class="chkbx" value="1">
                        <label name="prof12">Nature</label><br>

                        <input id="profhidden13" type="hidden" name="prof13" value="0">
                        <input id="prof13" type="checkbox" name="prof13" class="chkbx" value="1">
                        <label name="prof13">Perception</label><br>

                        <input id="profhidden14" type="hidden" name="prof14" value="0">
                        <input id="prof14" type="checkbox" name="prof14" class="chkbx" value="1">
                        <label name="prof14">Performance</label><br>

                        <input id="profhidden15" type="hidden" name="prof15" value="0">
                        <input id="prof15" type="checkbox" name="prof15" class="chkbx" value="1">
                        <label name="prof15">Persuasion</label><br>

                        <input id="profhidden16" type="hidden" name="prof16" value="0">
                        <input id="prof16" type="checkbox" name="prof16" class="chkbx" value="1">
                        <label name="prof16">Religion</label><br>

                        <input id="profhidden17" type="hidden" name="prof17" value="0">
                        <input id="prof17" type="checkbox" name="prof17" class="chkbx" value="1">
                        <label name="prof17">Sleight of Hand</label><br>

                        <input id="profhidden18" type="hidden" name="prof18" value="0">
                        <input id="prof18" type="checkbox" name="prof18" class="chkbx" value="1">
                        <label name="prof18">Stealth</label><br>

                        <input id="profhidden19" type="hidden" name="prof19" value="0">
                        <input id="prof19" type="checkbox" name="prof19" class="chkbx" value="1">
                        <label name="prof19">Streetwise</label><br>

                        <input id="profhidden20" type="hidden" name="prof20" value="0">
                        <input id="prof20" type="checkbox" name="prof20" class="chkbx" value="1">
                        <label name="prof20">Survival</label><br>

                    </div>
                </div>
                <script>
                    if (document.getElementById("prof1").checked) {
                        document.getElementById("profhidden1").disabled = true;
                    }
                    if (document.getElementById("prof2").checked) {
                        document.getElementById("profhidden2").disabled = true;
                    }
                    if (document.getElementById("prof3").checked) {
                        document.getElementById("profhidden3").disabled = true;
                    }
                    if (document.getElementById("prof4").checked) {
                        document.getElementById("profhidden4").disabled = true;
                    }
                    if (document.getElementById("prof5").checked) {
                        document.getElementById("profhidden5").disabled = true;
                    }
                    if (document.getElementById("prof6").checked) {
                        document.getElementById("profhidden6").disabled = true;
                    }
                    if (document.getElementById("prof7").checked) {
                        document.getElementById("profhidden7").disabled = true;
                    }
                    if (document.getElementById("prof8").checked) {
                        document.getElementById("profhidden8").disabled = true;
                    }
                    if (document.getElementById("prof9").checked) {
                        document.getElementById("profhidden9").disabled = true;
                    }
                    if (document.getElementById("prof10").checked) {
                        document.getElementById("profhidden10").disabled = true;
                    }
                    if (document.getElementById("prof11").checked) {
                        document.getElementById("profhidden11").disabled = true;
                    }
                    if (document.getElementById("prof12").checked) {
                        document.getElementById("profhidden12").disabled = true;
                    }
                    if (document.getElementById("prof13").checked) {
                        document.getElementById("profhidden13").disabled = true;
                    }
                    if (document.getElementById("prof14").checked) {
                        document.getElementById("profhidden14").disabled = true;
                    }
                    if (document.getElementById("prof15").checked) {
                        document.getElementById("profhidden15").disabled = true;
                    }
                    if (document.getElementById("prof16").checked) {
                        document.getElementById("profhidden16").disabled = true;
                    }
                    if (document.getElementById("prof17").checked) {
                        document.getElementById("profhidden17").disabled = true;
                    }
                    if (document.getElementById("prof18").checked) {
                        document.getElementById("profhidden18").disabled = true;
                    }
                    if (document.getElementById("prof19").checked) {
                        document.getElementById("profhidden19").disabled = true;
                    }
                    if (document.getElementById("prof20").checked) {
                        document.getElementById("profhidden20").disabled = true;
                    }
                    if (document.getElementById("prof1").checked) {
                        document.getElementById("profhidden1").disabled = true;
                    }
                </script>
                <button type="submit" name="submit2" class="sub">Next Page</button>
    </form>
</body>

</html>