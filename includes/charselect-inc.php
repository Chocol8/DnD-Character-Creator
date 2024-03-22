<?php
// include 'includes/function-inc.php';

// for ($i = 0; $i < $row; $i++) {
//     $charid = $charids[$i];
    
//     $charexist = charExist($conn, $charid);

//     $CHAR_NAME[$i] = $charexist["CHAR_NAME"];
//     $CHAR_CLASS[$i] = $charexist["CHAR_CLASS"];
//     $CHAR_LVL[$i] = $charexist["CHAR_LVL"];
// }
// include 'includes/dbh-inc.php';


    $sql = "SELECT * FROM charac";
    $result = mysqli_query($conn, $sql);

    while ($r = mysqli_fetch_assoc($result)) {
        // echo  $r['char_name'] ;
        // echo  $r['char_class'];
        // echo  $r['char_lvl'];
        }
?>