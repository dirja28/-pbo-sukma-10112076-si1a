<?php
// Fungsi untuk format rupiah
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0,);

}

// Class untuk belanja
class Belanja {
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBarang;

    public function hitungSubtotal() {
        return $this->hargaBarang * $this->jumlahBarang;
    }

    public function hitungDiskon($persenDiskon) {
        $subtotal = $this->hitungSubtotal();
        $diskon = ($persenDiskon / 100) * $subtotal;
        return $subtotal - $diskon;
    }
}

// Ambil data dari form 
$data = [
    'namaPembeli' => $_POST['namaPembeli'],
    'namaBarang' => $_POST['namaBarang'],
    'hargaBarang' => $_POST['hargaBarang'],
    'jumlahBarang' => $_POST['jumlahBarang'],
    'diskon' => $_POST['diskon'] 
];

// Instansiasi objek belanja
$belanja1 = new Belanja();
$belanja1->namaPembeli = $data['namaPembeli'];
$belanja1->namaBarang = $data['namaBarang'];
$belanja1->hargaBarang = $data['hargaBarang'];
$belanja1->jumlahBarang = $data['jumlahBarang'];

// Output hasil perhitungan
echo "<h2>STRUK BELANJA</h2>";
echo "Pembeli: " . $belanja1->namaPembeli . "<br>";
echo "Barang: " . $belanja1->namaBarang . "<br>";
echo "Subtotal: " . formatRupiah($belanja1->hitungSubtotal()) . "<br>";
echo "Diskon: " . $data['diskon'] . "%<br>";
echo "Total setelah diskon: " . formatRupiah($belanja1->hitungDiskon($data['diskon'])) . "<br>";
?>