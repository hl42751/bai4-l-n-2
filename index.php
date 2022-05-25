<?php 
      $a = 5;
      $b = 6;
      $a --; //$a = $a - 1
      $a += $b;
      $ss_bang = $a == $b;
      echo "So sanh: $ss_bang <br>";

      $ss_khac = $a != $b;
      echo "So sanh khac: $ss_khac <br>";

      $ss_lon_hon = $a > $b;
      echo "So sanh lon hon: $ss_lon_hon <br>";
?>