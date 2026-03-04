<?php
// Kelas untuk menghitung belanja berdasarkan aturan diskon yang diberikan
class Belanja{
    public $nama;
    public $kartuBelanja;
    public $totalBelanja;
    public $diskon;          
    public $totalBayar;
// Fungsi untuk menghitung diskon dan total bayar berdasarkan aturan yang diberikan
    public function hitungBelanja($kartuBelanja, $totalBelanja) {
        
        $diskon = 0;

        // jika belanja lebih dari atau sama dengan 500000, diskon 50000
        if ($totalBelanja >= 500000) {
            $diskon = 50000;
        }
        // jika tidak memiliki kartu belanja, beri diskon 5000 tanpa peduli jumlah belanja
        elseif (!$kartuBelanja) {
            $diskon = 5000;
        }
        // jika memiliki kartu belanja dan total belanja lebih dari atau sama dengan 100000, diskon 15000
        elseif ($kartuBelanja && $totalBelanja >= 100000) {
            $diskon = 15000;
        }
        // selain itu tidak ada diskon
        else {
            $diskon = 0;
        }
        $this->diskon = $diskon;
        $this->totalBayar = $totalBelanja - $diskon;
        $this->totalBelanja = $totalBelanja;
    }
}

// Mengambil data dari form
$belanja = new Belanja();
$belanja->nama = $_POST['nama'] ?? 'Nama Tidak Diberikan';
$belanja->kartuBelanja = isset($_POST['kartuBelanja']);
$belanja->totalBelanja = $_POST['totalBelanja'] ?? 0;
$belanja->hitungBelanja($belanja->kartuBelanja, $belanja->totalBelanja);

// Menampilkan hasil
echo "Nama: " . $belanja->nama . "<br>";
echo "Kartu Belanja: " . ($belanja->kartuBelanja ? "Ya" : "Tidak") . "<br>";
echo "Total Belanja: " . $belanja->totalBelanja . "<br>";   
echo "Diskon: " . $belanja->diskon . "<br>";
echo "Total Bayar: " . $belanja->totalBayar . "<br>";

?>