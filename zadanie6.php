<?php
    $rok = 1987;
    $rokPrzestepny = false;
    if($rok % 4 == 0 && $rok % 100 != 0 || $rok $400 == 0)
        $rokPrzestepny = true;
    if($rokPrzestepny)
        echo "Luty: 29 dni"
    else
        echo "Luty: 28 dni";
?>