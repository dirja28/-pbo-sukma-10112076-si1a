<?php
class Produk {

    public $nama;
    public $harga;

    // METHOD MENENTUKAN STATUS HARGA
    public function statusHarga() {
        if ($this->harga > 100000) {
            return "Produk Mahal";
        } else {
            return "Produk Terjangkau";
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // MEMBUAT OBJECT
    $produk1 = new Produk();

    // KEAMANAN INPUT
    $produk1->nama  = htmlspecialchars($_POST['nama']);
    $produk1->harga = htmlspecialchars($_POST['harga']);

    // OUTPUT
    echo "<h2>Data Produk</h2>";
    echo "Nama Produk : " . $produk1->nama . "<br>";
    echo "Harga : Rp " . $produk1->harga . "<br>";
    echo "Status : " . $produk1->statusHarga();

} else {
    echo "Data tidak ditemukan!";
}

?>