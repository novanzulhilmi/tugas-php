<?php
//Looping menggunakan for

echo "<h1>Looping Bilangan Prima</h1>";

for ($i = 2; $i <= 50; $i++) {
    $a = 0;
    for ($j = 1; $j <= $i; $j++) {
        if ($i % $j == 0) {
            $a++;
        }
    }
    if ($a == 2) {
        echo "$i. <b>Bilangan Prima</b><br>";
    }
}

?>