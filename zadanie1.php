<?php
    $liczba = 1232412412;
    if($liczba % 2 ==0)
        echo "liczba jest parzysta";
    else
        echo "liczba jest nieparzysta";

    echo "<br>";
    switch($liczba % 2 ==0)
    {
        case true:
            echo "liczba jest parzysta";
            break;
        case false:
            echo "liczba jest nieparzysta";
            break;
    }
?>