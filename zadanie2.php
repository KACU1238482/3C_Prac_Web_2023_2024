<?php
    $liczba1 = 123;
    $liczba2 = 12;
    if($liczba1 % $liczba2 == 0)
        echo "liczba pierwsza jest podzielna przez liczbe drugą";
    else    
        echo "liczba pierwsza nie jest podzielna przez liczbe drugą";

    echo "<br>";
    switch ($liczba1 % $liczba2 == 0)
    {
        case true:
            echo "liczba pierwsza jest podzielna przez liczbe drugą";
            break;
        case false:
            echo "liczba pierwsza nie jest podzielna przez liczbe drugą";
            break;
    }
?>