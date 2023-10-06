<?php
    $wiek = 21;
    if($wiek >0 && $wiek < 11)
        echo "dziecko";
    else if($wiek >11 && $wiek <17)
        echo "nastolatek";
    else if($wiek >18)
        echo "dorosły";

    echo"<br>"
    switch($wiek)
    {
        case $wiek > 0 && $wiek < 11:
            echo "dziecko";
            break;
        case $wiek > 11 && $wiek < 17:
            echo "nastolatek";
            break;
        case $wiek > 17:
            echo "dorosły";
            break;
    }
?>