<?php
class KonversiSuhu {
    public $celsius;

    function __construct($celsius) {
        $this->celsius = $celsius;
    }

    function hitungKonversi() {
        $hasil = array(
            "Celsius"    => $this->celsius,
            "Reamur"     => (4/5) * $this->celsius,
            "Fahrenheit" => (9/5) * $this->celsius + 32,
            "Kelvin"     => $this->celsius + 273.15
        );

        foreach ($hasil as $satuan => $nilai) {
            echo "Suhu dalam $satuan = $nilai derajat<br/>";
        }

        if ($this->celsius > 37) {
            echo "<b>Suhu tubuh di atas normal!</b><br/>";
        } else {
            echo "<b>Suhu tubuh normal.</b><br/>";
        }
    }
}

$suhu = new KonversiSuhu(36);
$suhu->hitungKonversi();
?>