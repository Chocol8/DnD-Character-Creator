<?php
    if(isset($_POST['submit2']))
    {
        $charn = 0;
        $charn = $_POST['charC'];
        
        if($charn == 1)
        {
            echo "-5";
        }
        else if($charn == 2 || $charn == 3)
        {
            echo "-4";
        }
        else if($charn == 4 || $charn == 5)
        {
            echo "-3";
        }
        else if($charn == 6 || $charn == 7)
        {
            echo "-2";
        }
        else if($charn == 8 || $charn == 9)
        {
            echo "-1";
        }
        else if($charn == 10 || $charn == 11 || $charn == NULL)
        {
            echo "+0";
        }
        else if($charn == 12 || $charn == 13)
        {
            echo "+1";
        }
        else if($charn == 14 || $charn == 15)
        {
            echo "+2";
        }
        else if($charn == 16 || $charn == 17)
        {
            echo "+3";
        }
        else if($charn == 18 || $charn == 19)
        {
            echo "+4";
        }
        else if($charn == 20 || $charn == 21)
        {
            echo "+5";
        }
        else if($charn == 22 || $charn == 23)
        {
            echo "+6";
        }
        else if($charn == 24 || $charn == 25)
        {
            echo "+7";
        }
        else if($charn == 26 || $charn == 27)
        {
            echo "+8";
        }
        else if($charn == 28 || $charn == 29)
        {
            echo "+9";
        }
        else if($charn == 30)
        {
            echo "+10";
        }
        else if($charn > 30)
        {
            echo "+10";
        }
        else if($charn < 1)
        {
            echo "-5";
        }
    }
?>