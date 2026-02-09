<?php

class belanja{
    public string $namapembeli="riza"; 
    public string $namabarang="roko"; 
    public int$hargabarang=5000; 
    public int $jumlahbarang=2;  
    public float $totalbayar;
    public float $diskon;

public static float $pajak=0.02;

public function __construct($namapembeli) {
    $this->namapembeli = $namapembeli;
}
public function hitungtotal(): float
{
    $subtotal = $this->hargabarang * $this->jumlahbarang;

    return $subtotal;
}


public function tampilrincian ($namapembeli): void{
    echo "nama pembeli :" .$this->namapembeli . "<br>";
    echo "nama barang :" .$this->namabarang . "<br>";
    echo "harga barang :".$this->hargabarang . "<br>";
    echo "jumlah barang :" .$this->jumlahbarang ."<br>";
    echo "total bayar :" .$this->hitungtotal(). "<br>";

}
}
$belanja1 = new belanja(namapembeli: "riza");
$belanja1->tampilrincian(namapembeli: $belanja1->namapembeli);

