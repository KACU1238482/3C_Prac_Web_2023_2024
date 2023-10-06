<?php
    $liczba = 145;
    if($liczba >= 100 && $liczba 150)
        echo "Podana liczba mieści się w przedziale (100;150)";
    else
        echo "Podana liczba nie mieści się w przedziale (100;150)";

    echo "<br>";
    switch($liczba >= 100 && $liczba 150)
    {
        case true:
            echo "Podana liczba mieści się w przedziale (100;150)";
            break;
        case false:
            echo "Podana liczba nie mieści się w przedziale (100;150)";
            break;
    }
?>