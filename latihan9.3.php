<?php
class manusia{
    // Atribut dengan berbagai tingkat akses
    protected $nama="Sukma";
    var $Kelas= "SI 1A";

    // Method untuk menampilkan nama
    protected function nama(){
        return "nama : " . $this->nama; 
    }
// Method untuk menampilkan nama
    public function tampilkan_nama(){
        return $this->nama();
    }
// Method untuk menampilkan kelas
    protected function kelas(){
        return "kelas : " . $this->Kelas;
    }
// Method untuk menampilkan kelas
    public function tampilkan_kelas(){
        return $this->kelas();
    }
}
// Membuat objek dari kelas manusia dan menampilkan nama dan kelasnya
$manusia = new manusia();
// echo $manusia->nama() . "<br />"; // Error karena method nama() bersifat protected
echo $manusia->tampilkan_nama() . "<br />";
echo $manusia->tampilkan_kelas() ;
?>