<p><i>Tugas 7 Pages 1 - Deret Bilangan Fibonacci</i></p>

<?php

    function fibonacci (int $jumlahBilangan) {
      $fibonacci = [];

      if ($jumlahBilangan < 0) {
        return $fibonacci; 
      }
      for ($i=0; $i < $jumlahBilangan; $i++) {
        if ($i<2) {
          $bilangan = $i;
        } else {
          $bilangan = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        array_push($fibonacci, $bilangan);
      }
      return $fibonacci;
    }

    echo implode(" ", fibonacci(22))." ";
?>

<br><br><br><br>

<p><i>Tugas 7 Pages 2 - Deret Bilangan Prima  0 sampai 200 </i></p>

<?php
    for ($i=1; $i<=200; $i++) {
      $a = 0;
      for ($j=1; $j<=$i; $j++) {
        if ($i % $j == 0) {
        $a++;
        }
      }
        if ($a == 2) {
        echo $i." ";
        }
    }
?>