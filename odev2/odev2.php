<?php

$gender = "male"; // cinsiyet (male/female)
$weight = 55; // kilo (kg)
$height = 170; // boy (cm)
$age = 25; // yaş (sene)
$guess = "1470"; // Tahmin edilen değer

if ($gender == "male") {
	$BMR = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
	echo "BMR:" . $BMR;

} elseif {$gender=="female"}{
	$BMR = 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
	echo "BMR:" . $BMR;
} else {
	echo "ınvalid parameter try again";
}

if ($guess == $BMR) {
	echo "tahmin degerine esit";
} elseif ($guess > $BMR) {
	echo "tahmin degerinden kucuk";
} else {
	echo "tahmin degerinden buyuk";
}

/*   yukarıdaki degerler icin ekran ciktisi 
          BMR:1499.102tahmin degerinden buyuk      */
