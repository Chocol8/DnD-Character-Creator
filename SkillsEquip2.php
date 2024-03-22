<html>

<head>
    <link rel="stylesheet" href="../Case Study/styles/design.css" media="screen">
</head>

<body>
    <nav class="sidebar-navigation">
        <ul>
            <li class="active">
                <i class="fa fa-share-alt"><a><img src="CharBasic.png" width="65px" height="65px"></a></i>
                <span class="tooltip">Character Basic</span>
            </li>
            <li>
                <i class="fa fa-hdd-o"><a href="CharBackground.php"><img src="Book.png" width="65px" height="65px"></a></i>
                <span class="tooltip">Character Background</span>
            </li>
            <li>
                <i class="fa fa-newspaper-o"><a href="Spells.php"><img src="Bag.png" width="65px" height="65px"></a></i>
                <span class="tooltip">Skills and Equipment</span>
            </li>
            <li>
                <i class="fa fa-print"><a href=""><img src="Wand.png" width="65px" height="65px"></a></i>
                <span class="tooltip">Spells</span>
            </li>
            <li>
                <i class="fa fa-sliders"><a href="notes.php"><img src="Notes.png" width="65px" height="65px"></a></i>
                <span class="tooltip">Notes</span>
            </li>
        </ul>
    </nav>

    <div class='table1'>
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
                        <button class="button" onclick="myFunction2()">add to list</button>
                        <br><br>
                        <?php echo "List of feats<br> "; ?>
                        <ul id="featss">
                        </ul>
                        <script>
                            function myFunction2() {
                                var node = document.createElement("LI");
                                var element = document.getElementById("feats").value;
                                var textnode = document.createTextNode(element);
                                node.appendChild(textnode);
                                document.getElementById("featss").appendChild(node);
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
                        <button class="button" onclick="myFunction1()">add to list</button>
                        <br><br>
                        <?php echo "List of languages<br> "; ?>
                        <ul id="langs">
                        </ul>
                        <script>
                            function myFunction1() {
                                var node = document.createElement("LI");
                                var element = document.getElementById("languages").value;
                                var textnode = document.createTextNode(element);
                                node.appendChild(textnode);
                                document.getElementById("langs").appendChild(node);
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
                        <button class="button" onclick="myFunction()">add to list</button>
                        <br><br>
                        <?php echo "List of Equipment<br> "; ?>
                        <ul id="myList">
                        </ul>
                        <script>
                            function myFunction() {
                                var node = document.createElement("LI");
                                var element = document.getElementById("equipment").value;
                                var textnode = document.createTextNode(element);
                                node.appendChild(textnode);
                                document.getElementById("myList").appendChild(node);
                            }
                        </script>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>