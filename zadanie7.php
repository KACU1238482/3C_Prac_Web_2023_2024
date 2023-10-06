<?php
  $liczba1 = 124124;
  $liczba2 = 4124124;
  $liczba3 = 5255;
  if($liczba1 < $liczba2 && $liczba1 < $liczba3)
    echo "najmniejsza liczba to " . $number1;
  else if($liczba2 < $liczba1 && $liczba2 < $liczba3)
    echo "najmniejsza liczba to " . $number2;
  else if($liczba3 < $liczba1 && $liczba3 < $liczba1)
    echo "najmniejsza liczba to " . $number3;

  echo "<br>";
  switch ($number1) 
  {
    case $liczba1 < $liczba2 && $liczba1 < $liczba3:
      echo "najmniejsza liczba to " . $number1;
      break;
    case $liczba2 < $liczba1 && $liczba2 < $liczba3:
      echo "najmniejsza liczba to " . $number2;
      break;
    case $liczba3 < $liczba1 && $liczba3 < $liczba1:
      echo "najmniejsza liczba to " . $number3;
  }
?>