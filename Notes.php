<html>

<head>
    <link rel="stylesheet" href="../Case Study/styles/Notes_style.css" media="screen">
    <script src="script.js" type="text/javascript"></script>
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
                <i class="fa fa-print"><a href="spells.php"><img src="../Case Study/images/Wand.png" width="65px" height="65px"></a></i>
                <span class="tooltip">Spells</span>
            </li>
            <li>
                <i class="fa fa-sliders"><a href=""><img src="../Case Study/images/Notes.png" width="65px" height="65px"></a></i>
                <span class="tooltip">Notes</span>
            </li>
            <li>
                <i class="fa fa-sliders"><a href="CharSelect.php"><img src="../Case Study/images/CharSelect.png" width="65px" height="65px"></a></i>
                <span class="tooltip">Back to Character Select</span>
            </li>
        </ul>
    </nav>
    <form method="post" action="character_creation/Charcreate5.php">
        <label class="lab">Notes</label><br><br>
        <br><textarea name="note"></textarea><br><br><br><br>
        <button type="submit" name="submit">Submit Character</button>
    </form>
</body>

</html>