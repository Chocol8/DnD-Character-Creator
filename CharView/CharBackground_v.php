<!-- There are textarea's here, insert the db variable before the </textarea> -->
<?php
    session_start();
    
    $backg = $_SESSION["char_backstory"];
    $check = $_SESSION["char_alignment"];
    $ptrait = $_SESSION["char_ptrait"];
    $ideal = $_SESSION["char_ideals"];
    $flaw = $_SESSION["char_flaws"];
    $about = $_SESSION["char_about"];
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Character Background</title>
        <link rel="stylesheet" type="text/css" href="../../Case Study/styles/CharBackground_style.css">
    </head>
    <body>
    <nav class="sidebar-navigation">
            <ul>
                <li class="active">
                    <i class="fa fa-share-alt"><a href="CharCreate_v2_v.php" ><img src="../../Case Study/images/CharBasic.png" width="65px" height="65px"></a></i>
                    <span class="tooltip">Character Basic</span>
                </li>
                <li>
                    <i class="fa fa-hdd-o"><img src="../../Case Study/images/Book.png" width="65px" height="65px"></a></i>
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
                    <i class="fa fa-sliders"><a href="Notes_v.php"><img src="../../Case Study/images/Notes.png" width="65px" height="65px"></a></i>
                    <span class="tooltip">Notes</span>
                </li>
                <li>
                    <i class="fa fa-sliders"><a href="CharViewExit.php"><img src="../../Case Study/images/CharSelect.png" width="65px" height="65px"></a></i>
                    <span class="tooltip">Back to Character Select</span>
                </li>
            </ul>
        </nav>
        <div class="backs">
            <label name="backstory" class="backsT">Backstory</label><br>
            <textarea name="backstory" class="textarea1" placeholder="Once upon a time..." readonly><?php echo "$backg"?></textarea>
        </div>
        <div class="alignm">
            
            <label for="alignm" class="backsT">Alignment</label><br>
            <div class="l_align">
                <input type="radio" name="alignm" id="lg" value="lg" class="chk" <?php if($check=="lg"){echo"checked";}?> onclick="return false">
                <label for="lg" class="chk">Lawful Good</label>
            </div>
            <div class="l_align">
                <input type="radio" name="alignm" id="ng" value="ng" class="chk" <?php if($check=="ng"){echo"checked";}?> onclick="return false">
                <label for="ng" class="chk">Neutral Good</label>
            </div>
            <div class="l_align">
                <input type="radio" name="alignm" id="cg" value="cg" class="chk"<?php if($check=="cg"){echo"checked";}?> onclick="return false">
                <label for="cg" class="chk">Chaotic Good</label>
            </div>

            <div class="m_align">
                <input type="radio" name="alignm" id="ln" value="ln" class="chk" <?php if($check=="ln"){echo"checked";}?> onclick="return false">
                <label for="ln" class="chk">Lawful Neutral</label>
            </div>
            <div class="m_align">
                <input type="radio" name="alignm" id="tn" value="tn" class="chk" <?php if($check=="tn"){echo"checked";}?> onclick="return false">
                <label for="tn" class="chk">True Neutral</label>
            </div>
            <div class="m_align">
                <input type="radio" name="alignm" id="cn" value="cn" class="chk" <?php if($check=="cn"){echo"checked";}?> onclick="return false">
                <label for="cn" class="chk">Chaotic Neutral</label>
            </div>

            <div class="r_align">
                <input type="radio" name="alignm" id="le" value="le" class="chk" <?php if($check=="le"){echo"checked";}?> onclick="return false">
                <label for="le" class="chk">Lawful Evil</label><br>
            </div>
            <div class="r_align">
                <input type="radio" name="alignm" id="ne" value="ne" class="chk" <?php if($check=="ne"){echo"checked";}?> onclick="return false">
                <label for="ne" class="chk">Neutral Evil</label><br>
            </div>
            <div class="r_align">
                <input type="radio" name="alignm" id="ce" value="ce" class="chk" <?php if($check=="ce"){echo"checked";}?> onclick="return false">
                <label for="ce" class="chk">Chaotic Evil</label>
            </div>
        </div>
        <div class="ptrait">
            <label name="pt" class="pt">Personality Traits</label><br>
            <textarea name="ptt" class="ptt" readonly><?php echo "$ptrait"?></textarea>
        </div>
        <div class="idea">
            <label name="ide" class="ide">Ideals</label><br>
            <textarea name="idee" class="idee" readonly><?php echo "$ideal"?></textarea>
        </div>
        <div class="flaw">
            <label name="flaw" class="ide">Flaws</label><br>
            <textarea name="flaww" class="idee" readonly><?php echo "$flaw"?></textarea>
        </div>
        <div class="abo">
            <label name="abo" class="ide">About</label><br>
            <textarea name="abou" class="idee" readonly><?php echo "$about"?></textarea>
        </div>
        <div class="subButt">
            <button type="submit" name="submit" class="buttButt" onclick="location.href='SkillsEquip_v.php'">Next Page</button>
        </div>
    </body>
</html>