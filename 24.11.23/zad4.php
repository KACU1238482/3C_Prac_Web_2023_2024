<?php
    echo "Kod applikacji z pętlą for:";
    for ($i = 1; $i <= 10; $i++)
    {
        echo $i. " ".sqrt($i);
    }

    echo "<br>Kod aplikacji z pętlą while:";
    $i = 1;
    while ($i <= 10)
    {
        echo $i." ".sqrt($i);
        $i++;
    }

    echo "<br>Kod aplikacji z pętlą do-while";
    $i = 100;
    do
    {
        echo $i." ".sqrt($i);
        $i++;
    }while ($i <= 10);
?>