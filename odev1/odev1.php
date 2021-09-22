<?php

$age = 29;
if ($age >= 0 && $age <= 14) {   // 0-14 = Çocuk
   echo "cocuk";
} elseif ( $age > 14 && $age <= 24) { // 15-24 = Genç
    echo "genc";
} elseif ($age > 24  && $age <= 64) { // 25-64 = Yetişkin
    echo "yetiskin";
} else { // 65+ = Yaşlı
    echo "yaslı";
}
  
 //age degiskeni 29 oldugu icin ekran cıktısı 'yetiskin' olacak.
