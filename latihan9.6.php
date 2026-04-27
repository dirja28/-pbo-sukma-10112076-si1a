<?php
// akses properties dengan getter dan setter
class Kendaraan {
    var $JumlahRoda;
    var $Warna;
    var $BahanBakar;
    var $Harga;
    var $Merek;
    var $TahunPembuatan;

    // Setter dan Getter untuk Merek
    function setMerek($x) {
        $this->Merek = $x;
    }

    function getMerek() {
        return $this->Merek;
    }

    // Setter dan Getter untuk Harga
    function setHarga($y) {
        $this->Harga = $y;
    }

    function getHarga() {
        return $this->Harga;
    }
}

// Membuat objek kendaraan
$Kendaraan1 = new Kendaraan();
$Kendaraan1->setMerek('Honda Vario');
$Kendaraan1->setHarga(10000000);

// Menampilkan hasil
echo $Kendaraan1->getMerek();
echo "<br>";
echo $Kendaraan1->getHarga();
?>
