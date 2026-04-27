<?php
class manusia{
    private $nama="Sukma";
    private $Kelas= "SI 1A";

    private function m_nama(){
        return $this->nama;
    }

    public function tampilkan_nama(){
        return $this->m_nama();
    }

    function tampilkan_kelas(){
        return $this->Kelas;
    }


}

$manusia = new manusia();
echo "Nama : " . $manusia->tampilkan_nama() . "<br />"; 
echo "Kelas : " . $manusia->tampilkan_kelas() ;
?>