<?php
date_default_timezone_set("Asia/Jakarta");

$hari_array = [
    'Sunday' => 'Minggu',
    'Monday' => 'Senin',
    'Tuesday' => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu',
];

$hari_inggris = date("l");
$hari_Indonesia = $hari_array[$hari_inggris];

echo "Hari ini: " . $hari_Indonesia;
echo "<br>";
echo "Jam sekarang: ". date("H:i:s");
