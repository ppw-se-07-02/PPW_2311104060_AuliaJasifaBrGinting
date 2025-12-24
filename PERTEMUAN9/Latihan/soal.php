<?php
// 1. Program Konversi Suhu
// function celsiusToFahrenheit($celsius) {
//     return ($celsius * 9/5) + 32;
// }

// function fahrenheitToCelsius($fahrenheit) {
//     return ($fahrenheit - 32) * 5/9;
// }

// function celsiusToKelvin($celsius) {
//     return $celsius + 273.15;
// }

// $celsius = 25;
// $fahrenheit = 77;
// echo "Konversi Suhu:<br>";
// echo "Celcius ke Fahrenheit: " . number_format(celsiusToFahrenheit($celsius), 2) . " °F<br>";
// echo "Fahrenheit ke Celcius: " . number_format(fahrenheitToCelsius($fahrenheit), 2) . " °C<br>";
// echo "Celcius ke Kelvin: " . number_format(celsiusToKelvin($celsius), 2) . " K<br>";
// echo "<br>";


// // 2. Kalkulator Diskon
// $totalBelanja = 750000; 
// $diskon = 0;
// if ($totalBelanja >= 1000000) {
//     $diskon = 0.30;
// } elseif ($totalBelanja >= 500000) {
//     $diskon = 0.20;
// } elseif ($totalBelanja >= 100000) {
//     $diskon = 0.10;
// }
// $jumlahDiskon = $totalBelanja * $diskon;
// $totalBayar = $totalBelanja - $jumlahDiskon;
// echo "Kalkulator Diskon:<br>";
// echo "Total Belanja: Rp " . number_format($totalBelanja, 0, ',', '.') . "<br>";
// echo "Diskon: Rp " . number_format($jumlahDiskon, 0, ',', '.') . " (" . ($diskon * 100) . "%)<br>";
// echo "Total Bayar: Rp " . number_format($totalBayar, 0, ',', '.') . "<br>";
// echo "<br>";


// 3. Manipulasi Array
$nilaiMahasiswa = [75, 89, 65, 90, 85, 70, 98, 65, 69, 70, 12];

$nilaiTertinggi = max($nilaiMahasiswa);
$nilaiTerendah = min($nilaiMahasiswa);
$rataRata = array_sum($nilaiMahasiswa) / count($nilaiMahasiswa);

$jumlahLulus = 0;
foreach ($nilaiMahasiswa as $nilai) {
    if ($nilai >= 70) {
        $jumlahLulus++;
    }
}

$nilaiUrut = $nilaiMahasiswa;
rsort($nilaiUrut);
echo "Manipulasi Array Nilai Mahasiswa:<br>";
echo "Nilai Tertinggi: " . $nilaiTertinggi . "<br>";
echo "Nilai Terendah: " . $nilaiTerendah . "<br>";
echo "Rata-rata Nilai: " . number_format($rataRata, 2) . "<br>";
echo "Jumlah Mahasiswa Lulus (>=70): " . $jumlahLulus . "<br>";
echo "Nilai Urut dari Tertinggi ke Terendah: " . implode(", ", $nilaiUrut) . "<br>";
?>