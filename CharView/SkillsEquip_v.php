<?php session_start(); ?>

<html>
<head>
    <link rel="stylesheet" href="../../Case Study/styles/design.css" media="screen">
</head>
<body>
<nav class="sidebar-navigation">
    <ul>
        <li class="active">
            <i class="fa fa-share-alt"><a href="CharCreate_v2_v.php"><img src="../../Case Study/images/CharBasic.png" width="65px" height="65px"></a></i>
            <span class="tooltip">Character Basic</span>
        </li>
        <li>
            <i class="fa fa-hdd-o"><a href="CharBackground_v.php" ><img src="../../Case Study/images/Book.png" width="65px" height="65px"></a></i>
            <span class="tooltip">Character Background</span>
        </li>
        <li>
            <i class="fa fa-newspaper-o"><a><img src="../../Case Study/images/Bag.png" width="65px" height="65px"></a></i>
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

<div class='table1'>
    <table class='table1'>
        <tr>
            <td>
                <div class="feats">
                    <label name="Feats">Feats</label><br><br>
                    <form action="#" method="post">
                        <select name="feats" id="feats" disabled>
                            <?php include "../../Case Study/includes/feats.php"?>
                        </select>
                        <br><br>
                    </form>
                    <button class="button" onclick="myFunction2()" disabled>add to list</button>
                    <br><br>
                    <?php echo "List of feats<br> "; ?>
                    <?php
                       echo $_SESSION["char_feats"];
                    ?>
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
                        function myfunfun2($equip){
                            var node = document.createElement("LI");
                            var element = document.getElementById("$feats").value;
                            var textnode = document.createTextNode(element);
                            node.appendChild(textnode);
                            document.getElementById("myList").appendChild(node);
                        }
                    </script>
                </div> 
            </td>
                
            <td>
                <div class="languages">
                    <label name="Languages">Languages</label><br><br>
                    <form action="#" method="post">
                        <select name="languages" id="languages" disabled>
                            <?php include "../../Case Study/includes/languages.php"?>
                        </select>
                        <br><br>
                    </form>
                    <button class="button" onclick="myFunction1()" disabled>add to list</button>
                    <br><br>
                    <?php echo "List of languages<br> "; ?>
                    <?php
                        echo $_SESSION["char_language"];
                    ?>
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
                        function myfunfun1($equip){
                            var node = document.createElement("LI");
                            var element = document.getElementById("$lang").value;
                            var textnode = document.createTextNode(element);
                            node.appendChild(textnode);
                            document.getElementById("myList").appendChild(node);
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
                        <select name="equipment" id="equipment" disabled>
                            <?php include "../../Case Study/includes/equipment.php"?>
                        </select>
                        <br><br>
                    </form>
                    <button class="button" onclick="myFunction()" disabled>add to list</button>
                    <br><br>
                    <?php echo "List of Equipment<br> "; ?>
                    <?php
                        echo $_SESSION["char_equipment"];
                    ?>
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
                        function myfunfun($equip){
                            var node = document.createElement("LI");
                            var element = document.getElementById("$equip").value;
                            var textnode = document.createTextNode(element);
                            node.appendChild(textnode);
                            document.getElementById("myList").appendChild(node);
                        }
                    </script>
                    
                </div>    
            </td>        
        </tr>
    </table>
    <br><button type="submit" name="submit" class="sub" onclick="location.href='Spells_v.php'">Next Page</button>
</div>   
</body>
</html>