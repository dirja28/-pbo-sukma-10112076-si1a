<?php
// Kelas Produk yang memiliki properti nama dan harga
class produk {
    public $nama;
    public $harga;
// Konstruktor untuk menginisialisasi properti
    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getinfo() {
        return "produk: $this->nama-Rp:" . number_format($this->harga, 0, ',', '.');

    }
}
// Kelas ProdukDigital yang merupakan turunan dari kelas produk
class ProdukDigital extends produk {
    public $ukuranfile;

    public function __construct($nama, $harga, $ukuranfile) {
        parent::__construct($nama, $harga);
        $this->ukuranfile = $ukuranfile;
    }

    public function getinfo(){
        return "Produk Digital: $this->nama-Rp:" . number_format($this->harga, 0, ',', '.') . " - Ukuran File: $this->ukuranfile MB";
    }
}

$p1 = new produk("Buku", 50000);
$p2 = new ProdukDigital("Ebook PHP", 200000, 100);

echo $p1->getinfo();
echo "<br>";
echo $p2->getinfo();


$data = [
    new produk("Buku", 50000),
    new ProdukDigital("Ebook PHP", 200000, 100)
];  
foreach ($data as $produk) {
    echo $produk->getinfo() . "<br>";
}

?>