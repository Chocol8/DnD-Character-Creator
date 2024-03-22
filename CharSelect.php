<?php
session_start();
?>

<!DOCTYPE html>
<?php
$row = $_SESSION["users_chars"];
if ($row < 0) {
    include 'includes/charselect-inc.php';
}
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Characters</title>
    <link rel="stylesheet" type="text/css" href="../Case Study/styles/CharSelect_style.css">
</head>

<body>
    <div class="Acc">
        <button type="button" onclick="location.href='Account.php'" class="butts"><img src="../Case Study/images/AccIcon2.png" width="80px" height="80px" style="margin-left:-5px; margin-top:-9px;"></button>
    </div>
    <div class="chars">
        <button type="button" name="char1" onclick="location.href='CharCreate_v2.php'">
            <img src="../Case Study/images/PLUS2.png" height="60px" width="60px">
            <div class="buttxt">New Character</div>
        </button>
    </div>

    <?php
    include 'includes/dbh-inc.php';
    $user = $_SESSION['users_id'];
    $sql = "SELECT * FROM charac WHERE char_status=1 AND users_users_id=$user";
    $result = mysqli_query($conn, $sql);
    echo $_SESSION['users_id'];
    while ($r = mysqli_fetch_assoc($result)) {
        echo
        "
            <div class=' chS'>
                <form method='post' action='includes/CharDelete.php'>
                    <input id='hiddenuid' type='hidden' name='char_id' class='check' value='" . $r['char_id'] . "'>
                    <button type='submit' name='del' class='delbutt'><img src='../Case Study/images/minus.png' width='80px' height='80px' class='delbuttimg'></button>
                </form>
                <form method='post' action='../Case Study/CharView/character_fetcher.php'>
                    <input id='hiddenuid' type='hidden' name='char_id' class='check' value='" . $r['char_id'] . "'>
                    <button type='submit' name='viewer' class='cn'><label class='lb1 lbl1'>" . $r['char_name'] . "</label><br><label class='lb2 lbl2'>" . $r['char_class'] . "</label><br><label class='lb3 lbl3'>Level " . $r['char_lvl'] . "</label></div>
                </form>
                
            </div>
        ";
    }
    ?>
</body>

</html>