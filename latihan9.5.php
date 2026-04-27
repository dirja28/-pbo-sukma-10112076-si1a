<?php
// Membuat class Kendaraan
class Kendaraan {
    var $merek;
    var $jmlroda;
    var $harga;
    var $warna;
    var $bhnbakar;
    var $tahun;

    // Method setter untuk setiap properti
    function setMerek($x) {
        $this->merek = $x;
    }

    function setJmlroda($x) {
        $this->jmlroda = $x;
    }

    function setHarga($x) {
        $this->harga = $x;
    }

    function setWarna($x) {
        $this->warna = $x;
    }

    function setBhnbakar($x) {
        $this->bhnbakar = $x;
    }

    function setTahun($x) {
        $this->tahun = $x;
    }
}

// Membuat objek kendaraan 1
$kendaraan1 = new Kendaraan();
$kendaraan1->setMerek('Vario Farid ');
$kendaraan1->setJmlroda(2);
$kendaraan1->setHarga(2000000);
$kendaraan1->setWarna('Hitam');
$kendaraan1->setBhnbakar('Pertamax');
$kendaraan1->setTahun(2023);

// Membuat objek kendaraan 2
$kendaraan2 = new Kendaraan();
$kendaraan2->setMerek('Honda Supra X 125');
$kendaraan2->setJmlroda(2);
$kendaraan2->setHarga(13000000);
$kendaraan2->setWarna('Putih');
$kendaraan2->setBhnbakar('Premium');
$kendaraan2->setTahun(2026);

// Membuat objek kendaraan 3
$kendaraan3 = new Kendaraan();
$kendaraan3->setMerek('Honda Stylo');
$kendaraan3->setJmlroda(2);
$kendaraan3->setHarga(28000000);
$kendaraan3->setWarna('Merah');
$kendaraan3->setBhnbakar('Pertamax');
$kendaraan3->setTahun(2025);

// Menampilkan data kendaraan 1
echo $kendaraan1->merek."<br>";
echo $kendaraan1->jmlroda."<br>";
echo $kendaraan1->harga."<br>";
echo $kendaraan1->warna."<br>";
echo $kendaraan1->bhnbakar."<br>";
echo $kendaraan1->tahun."<br><br>";

// Menampilkan data kendaraan 2
echo $kendaraan2->merek."<br>";
echo $kendaraan2->jmlroda."<br>";
echo $kendaraan2->harga."<br>";
echo $kendaraan2->warna."<br>";
echo $kendaraan2->bhnbakar."<br>";
echo $kendaraan2->tahun."<br><br>";

// Menampilkan data kendaraan 3
echo $kendaraan3->merek."<br>";
echo $kendaraan3->jmlroda."<br>";
echo $kendaraan3->harga."<br>";
echo $kendaraan3->warna."<br>";
echo $kendaraan3->bhnbakar."<br>";
echo $kendaraan3->tahun."<br>";
?>
