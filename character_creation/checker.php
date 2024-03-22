<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST["submit"])) {

        $feats = $_POST["tFeats"];
        $language = $_POST["tLangu"];
        $equipment = $_POST["tEquip"];

        session_start();
        $_SESSION["feats"] = $feats;
        $_SESSION["language"] = $language;
        $_SESSION["equipments"] = $equipment;


        echo $_SESSION["feats"];
        echo "<br>";
        echo $_SESSION["language"];
        echo "<br>";
        echo $_SESSION["equipments"];
        echo "<br>";
        echo $_SESSION["char_backstory"];
        echo "<br>";
        echo $_SESSION["char_alignment"];
        echo "<br>";
        echo $_SESSION["char_ptrait"];
        echo "<br>";
        echo $_SESSION["char_ideals"];
        echo "<br>";
        echo $_SESSION["char_flaws"];
        echo "<br>";
        echo $_SESSION["char_about"];
        echo "<br>";
        echo $_SESSION["char_name"];
        echo "<br>";
        echo $_SESSION["prof_acro"];
        echo "<br>";
        echo $_SESSION["prof_animal_handling"];
        echo "<br>";
        echo $_SESSION["prof_arcana"];
        echo "<br>";
        echo $_SESSION["prof_athletic"];
        echo "<br>";
        echo $_SESSION["prof_deception"];
        echo "<br>";
        echo $_SESSION["prof_history"];
        echo "<br>";
        echo $_SESSION["prof_intimidation"];
        echo "<br>";
        echo $_SESSION["prof_performance"];
        echo "<br>";
        echo $_SESSION["prof_religion"];
        echo "<br>";
        echo $_SESSION["prof_stealth"];
        echo "<br>";
        echo $_SESSION["prof_survival"];
        echo "<br>";
        echo "<br>";
        echo $_SESSION["char_str"];
        echo "<br>";
        echo $_SESSION["char_dex"];
        echo "<br>";
        echo $_SESSION["char_con"];
        echo "<br>";
        echo $_SESSION["char_int"];
        echo "<br>";
        echo $_SESSION["char_wis"];
        echo "<br>";
        echo $_SESSION["char_cha"];
        echo "<br>";
        echo $_SESSION["char_class"];
        echo "<br>";
        echo $_SESSION["char_subclass"];
    }

    ?>
</body>

</html>