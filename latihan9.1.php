<?php
class manusia {
    public $nama="Sukma";
    public $Kelas="SI 1A";
// Method untuk menampilkan nama
    function tampilkan_nama(){
        return $this->nama;
    }
// Method untuk menampilkan kelas
    public function tampilkan_kelas(){
        return $this->Kelas;
    }

}
// Membuat objek dari kelas manusia dan menampilkan nama dan kelasnya
$manusia = new manusia();
echo "Nama : " . $manusia->tampilkan_nama() . "<br />";
echo "Kelas : " . $manusia->tampilkan_kelas() ;
?>