<?php

$ar_buah = ['Pepaya', 'Mangga', 'Pisang', 'Jambu'];

// Mencetak buah dengan indeks - 2
echo $ar_buah[2];

// Mencetak jumlah buah
echo "<br />Jumlah buah : " . count($ar_buah);

echo "<br>";

echo "<ol>";
// Mencetak seluruh buah
foreach ($ar_buah as $buah) {
    echo "<li>" . $buah . "</li>";
}
echo "</ol>";

// Tambah array
$ar_buah[2] = 'Manggis';

//Hapus
unset($ar_buah[1]);

// Update / ubah
$ar_buah[2] = 'Manggis';

// Cetak seluruh
echo "<ul>";