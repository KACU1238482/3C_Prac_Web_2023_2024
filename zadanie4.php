<?php
    $liczba = 2;
    if($liczba > 0)
        echo "liczba jest dodatnia";
    else if($liczba < 0)
        echo "liczba jest ujemna";
    else
        echo "liczba jest równa zero";

    echo"<br>";
    switch($liczba)
    {
        case 0:
            echo "Liczba jest równa zero";
            break;
        case $liczba < 0 :
            echo "Liczba jest ujemna";
            break;
        case $liczba > 0:
            echo "Liczba jest dodatnia";
            break;
    }
?>