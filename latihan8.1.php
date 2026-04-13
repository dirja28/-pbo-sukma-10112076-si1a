<?php
class Segitiga {
    public $tinggi;
    public $lebar;

    function __construct($tinggi, $lebar) {
        $this->tinggi = $tinggi;
        $this->lebar = $lebar;
    }

    function luas() {
        return $this->tinggi * $this->lebar / 2;
    }
}

$segitiga = new Segitiga(200, 500);
echo "Luas Segitiga = " . $segitiga->luas();
?>