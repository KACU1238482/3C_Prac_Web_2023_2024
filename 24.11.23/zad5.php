<?php
    function Funkcja($x)
    {
        return $x**2 - 4;
    }

    function MetodaPolowienia($Funkcja, $a, $b, $epsilon)
    {
        if ($Funkcja($a) * $Funkcja($b) >= 0)
        {
            echo "Funkcja nie spełnia warunków metody połowienia";
            return;
        }

        $c = $a;
        while (($b - $a) >= $epsilon)
        {
            $c = ($a + $b) / 2;
            if (abs($Funkcja($c) < $epsilon))
            {
                break;
            }
            if ($Funkcja($c) * $Funkcja($a) < 0)
            {
                $b = $c;
            }
            else
            {
                $a = $c;
            }
        }
        echo "Przybliżone miejsce zerowe:". $c;
    }

    $a = 10;
    $b = 40;
    $epsilon = 1;

    MetodaPolowienia('Funkcja', $a, $b, $epsilon);
?>