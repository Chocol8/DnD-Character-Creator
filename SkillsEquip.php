<html>

<head>
    <link rel="stylesheet" href="../Case Study/styles/design.css" media="screen">
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
                <i class="fa fa-newspaper-o"><a href="Spells.php"><img src="../Case Study/images/Bag.png" width="65px" height="65px"></a></i>
                <span class="tooltip">Skills and Equipment</span>
            </li>
            <li>
                <i class="fa fa-print"><a href="spells.php"><img src="../Case Study/images/Wand.png" width="65px" height="65px"></a></i>
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

    <div class='table1'>
        <form action="character_creation/Charcreate3.php" method="post">
            <table class='table1'>
                <tr>
                    <td>
                        <div class="feats">
                            <label name="Feats">Feats</label><br><br>
                            <form action="#" method="post">
                                <select name="feats" id="feats">
                                    <?php include "../Case Study/includes/feats.php" ?>
                                </select>
                                <br><br>
                            </form>
                            <button type="button" class="button" onclick="myFunction2()">add to list</button>
                            <br><br>
                            <?php echo "List of feats<br> "; ?>
                            <textarea id="tFeats" name="tFeats" readonly></textarea>
                            <script>
                                function myFunction2() {
                                    var node = document.getElementById("tFeats");
                                    var element = document.getElementById("feats").value += '\n';
                                    var textnode = document.createTextNode(element);
                                    node.appendChild(textnode);
                                    document.getElementById("tFeats").appendChild(node);
                                }
                            </script>
                        </div>
                    </td>

                    <td>
                        <div class="languages">
                            <label name="Languages">Languages</label><br><br>
                            <form action="#" method="post">
                                <select name="languages" id="languages">
                                    <?php include "../Case Study/includes/languages.php" ?>
                                </select>
                                <br><br>
                            </form>
                            <button type="button" class="button" onclick="myFunction1()">add to list</button>
                            <br><br>
                            <?php echo "List of languages<br> "; ?>
                            <textarea id="tLangu" name="tLangu" readonly></textarea>
                            <script>
                                function myFunction1() {
                                    var node = document.getElementById("tLangu");
                                    var element = document.getElementById("languages").value += '\n';
                                    var textnode = document.createTextNode(element);
                                    node.appendChild(textnode);
                                    document.getElementById("tLangu").appendChild(node);
                                }
                            </script>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan='2'>
                        <div class="equipment">
                            <label name="equipment">Equipment</label><br><br>
                            <form action="#" method="post">
                                <select name="equipment" id="equipment">
                                    <?php include "../Case Study/includes/equipment.php" ?>
                                </select>
                                <br><br>
                            </form>
                            <button type="button" class="button" onclick="myFunction()">add to list</button>
                            <br><br>
                            <?php echo "List of Equipment<br> "; ?>
                            <textarea id="tEquip" name="tEquip" readonly></textarea>
                            <script>
                                function myFunction() {
                                    var node = document.getElementById("tEquip");
                                    var element = document.getElementById("equipment").value += ', ';
                                    var textnode = document.createTextNode(element);
                                    node.appendChild(textnode);
                                    document.getElementById("tEquip").appendChild(node);
                                }
                            </script>
                        </div>
                    </td>
                </tr>
            </table>
            <br><br><button type="submit" name="submit" class="sub">Next Page</button>
        </form>
    </div>
</body>

</html>