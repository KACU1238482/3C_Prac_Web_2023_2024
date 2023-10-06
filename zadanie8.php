<?php
    $liczba1 = 1233;
    $liczba2 = 4211;
    $liczba3 = 1233;
    if($liczba1 == $liczba2 || $liczba1 == $liczba3 || $liczba2 == $liczba3)
        echo "przynajmniej dwie liczbt są takie same";
    else
        echo "nie ma takich samych liczb";

    echo "<br>";
    switch($liczba1 == $liczba2 || $liczba1 == $liczba3 || $liczba2 == $liczba3)
    {
        case true:
            echo "przynajmniej dwie liczbt są takie same";
            break;
        case false:
            echo "nie ma takich samych liczb";
            break;
    }
?>