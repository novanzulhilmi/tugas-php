<?php
//Branching Tugas

echo "<h1>Branching</h1>";

function NILAI ($nilai) {
    if ($nilai >= 81 AND $nilai <= 100) {
        echo "Nilai anda $nilai, <b>Nilai Anda A</b>, Bobot anda 4";
    }
    elseif ($nilai >= 78 AND $nilai <= 80.99) {
        echo "Nilai anda $nilai, <b>Nilai Anda A-</b>, Bobot anda 3.7";
    }
    elseif ($nilai >= 75 AND $nilai <= 77.99) {
        echo "Nilai anda $nilai, <b>Nilai Anda B+</b>, Bobot anda 3.3";
    }
    elseif ($nilai >= 70 AND $nilai <= 74.99) {
        echo "Nilai anda $nilai, <b>Nilai Anda B</b>, Bobot anda 3";
    }
    elseif ($nilai >= 65 AND $nilai <= 69.99) {
        echo "Nilai anda $nilai, <b>Nilai Anda B-</b>, Bobot anda 2.7";
    }
    elseif ($nilai >= 60 AND $nilai <= 64.99) {
        echo "Nilai anda $nilai, <b>Nilai Anda C+</b>, Bobot anda 2.3";
    }
    elseif ($nilai >= 55 AND $nilai <= 59.99) {
        echo "Nilai anda $nilai, <b>Nilai Anda C</b>, Bobot anda 2";
    }
    elseif ($nilai >= 40 AND $nilai <= 54.99) {
        echo "Nilai anda $nilai, <b>Nilai Anda D</b>, Bobot anda 1";
    }
    elseif ($nilai >= 0 AND $nilai <= 39.99) {
        echo "Nilai anda $nilai, <b>Nilai Anda E</b>, Bobot anda 0";
    }
    else {
        echo "Nilai anda $nilai, <b><u>Kamu Keren</u></b>, Bobot anda Ya mana ada dong";
    }
} 

echo "1. Jami ";
NILAI(92);
echo "<br>";
echo "2. Sapi ";
NILAI(80);
echo "<br>";
echo "3. Paris ";
NILAI(77);
echo "<br>";
echo "4. Giga ";
NILAI(71);
echo "<br>";
echo "5. Yuda ";
NILAI(67);
echo "<br>";
echo "6. Udin ";
NILAI(62);
echo "<br>";
echo "7. Akram ";
NILAI(56);
echo "<br>";
echo "8. Chad ";
NILAI(49);
echo "<br>";
echo "9. Orinn ";
NILAI(0);
echo "<br>";
echo "<br>";
echo "10. Nopan ";
NILAI(110);