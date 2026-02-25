<?php
 Class Pegadayan {
    public $Pinjaman;
    public $Tenor;
    public $Bunga = 0.10;
    public $AngsuranPerBulan;
    public $TotalPinjaman;
    public $DendaTelat = 0.0015;
    public $TotalPinjamanDenganDenda;

    public Function MenghitungAngsuran() {
        $this->AngsuranPerBulan = ($this->Pinjaman / $this->Tenor) * (1 + $this->Bunga);
        return $this ->AngsuranPerBulan;
    }

    public Function MenghitungDendaTelat() {
        $this->TotalPinjamanDenganDenda = $this->AngsuranPerBulan * (1 + $this->DendaTelat);
        return $this->TotalPinjamanDenganDenda;
    }

    public Function MenghitungTotalPinjaman() {
        $this->TotalPinjaman = $this ->Pinjaman * (1 + $this->Bunga);
        return $this->TotalPinjaman;
    }
 }

 $pegadayan1 = new Pegadayan();
 $pegadayan1->Pinjaman =
 htmlspecialchars($_POST['pinjaman']);
 $pegadayan1->Tenor =
 htmlspecialchars($_POST['tenor']);
 echo "<h2>Form Pegadayan</h2>";
 echo "Pinjaman : " . $pegadayan1->Pinjaman . "<br>";
 echo "Tenor : " . $pegadayan1->Tenor . " bulan<br>";
 echo "<br>";
 echo "Total Pinjaman : " . $pegadayan1->MenghitungTotalPinjaman() . "<br>";
 echo "Denda Telat Perhari : " . $pegadayan1->DendaTelat * 100 . "%<br>";
 echo "Total Pinjaman dengan Denda : " . $pegadayan1->MenghitungDendaTelat() . "<br>";
 echo "Angsuran Perbulan : " . $pegadayan1->MenghitungAngsuran() . "<br>";
 echo "Angsuran dengan Denda : " . ($pegadayan1->MenghitungAngsuran() + $pegadayan1->MenghitungDendaTelat()) . "<br>";

?>