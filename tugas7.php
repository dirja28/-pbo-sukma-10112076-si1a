<?php

// Programmer
class Programmer extends Employee {
    public function hitungGaji(){
        $bonus = 0;
        if($this->masaKerja >= 1 && $this->masaKerja <= 10){
            $bonus = 0.01 * $this->masaKerja * $this->gaji;
        } elseif($this->masaKerja > 10){
            $bonus = 0.02 * $this->masaKerja * $this->gaji;
        }
        return $this->gaji + $bonus;
    }

    public function getInfo(){
        return "Programmer: $this->nama – Gaji Rp " . number_format($this->hitungGaji(),0,",",".");
    }
}

// Direktur
class Direktur extends Employee {
    public function hitungGaji(){
        $bonus = 0.5 * $this->masaKerja * $this->gaji;
        $tunjangan = 0.1 * $this->masaKerja * $this->gaji;
        return $this->gaji + $bonus + $tunjangan;
    }

    public function getInfo(){
        return "Direktur: $this->nama – Gaji Rp " . number_format($this->hitungGaji(),0,",",".");
    }
}

// Pegawai Mingguan
class PegawaiMingguan extends Employee {
    private $hargaBarang;
    private $stokBarang;
    private $penjualan;

    public function __construct($nama, $gaji, $masaKerja, $hargaBarang, $stokBarang, $penjualan){
        parent::__construct($nama, $gaji, $masaKerja);
        $this->hargaBarang = $hargaBarang;
        $this->stokBarang = $stokBarang;
        $this->penjualan = $penjualan;
    }

    public function hitungGaji(){
        $persentase = ($this->stokBarang > 0) ? ($this->penjualan / $this->stokBarang) * 100 : 0;
        if($persentase > 70){
            $bonus = $this->penjualan * (0.10 * $this->hargaBarang);
        } else {
            $bonus = $this->penjualan * (0.03 * $this->hargaBarang);
        }
        return $this->gaji + $bonus;
    }

    public function getInfo(){
        return "Pegawai Mingguan: $this->nama – Gaji Rp " . number_format($this->hitungGaji(),0,",",".");
    }
}
//data pegawai (aray)
$data = [
    ["tipe"=>"programmer","nama"=>"Nizar","gaji"=>5000000,"masaKerja"=>8],
    ["tipe"=>"direktur","nama"=>"Sukma","gaji"=>10000000,"masaKerja"=>12],
    ["tipe"=>"mingguan","nama"=>"Cendra","gaji"=>3000000,"masaKerja"=>2,"hargaBarang"=>100000,"stokBarang"=>100,"penjualan"=>80]
];

// menampilkan informasi pegawai (looping)
foreach($data as $d){
    if($d["tipe"] == "programmer"){
        $obj = new Programmer($d["nama"], $d["gaji"], $d["masaKerja"]);
    } elseif($d["tipe"] == "direktur"){
        $obj = new Direktur($d["nama"], $d["gaji"], $d["masaKerja"]);
    } elseif($d["tipe"] == "mingguan"){
        $obj = new PegawaiMingguan($d["nama"], $d["gaji"], $d["masaKerja"], $d["hargaBarang"], $d["stokBarang"], $d["penjualan"]);
    } else {
        $obj = new Employee($d["nama"], $d["gaji"], $d["masaKerja"]);
    }

    echo $obj->getInfo()."<br>";
}
?>