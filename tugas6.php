<?php
class BangunRuang {
    public $jenis;
    public $sisi;
    public $jari;
    public $tinggi;

    public function __construct($jenis, $sisi = 0, $jari = 0, $tinggi = 0) {
        $this->jenis  = $jenis;
        $this->sisi   = $sisi;
        $this->jari   = $jari;
        $this->tinggi = $tinggi;
    }
    public function hitungVolume() {
        switch ($this->jenis) {
            case "Bola":
                return (4/3) * M_PI * pow($this->jari, 3);
            case "Kerucut":
                return (1/3) * M_PI * pow($this->jari, 2) * $this->tinggi;
            case "Limas Segi Empat":
                return (1/3) * pow($this->sisi, 2) * $this->tinggi;
            case "Kubus":
                return pow($this->sisi, 3);
            case "Tabung":
                return M_PI * pow($this->jari, 2) * $this->tinggi;
            default:
                return 0;
        }
    }
}

$bangunRuang = [
    new BangunRuang("Bola", 0, 7, 0),
    new BangunRuang("Kerucut", 0, 14, 10),
    new BangunRuang("Limas Segi Empat", 8, 0, 24),
    new BangunRuang("Kubus", 30, 0, 0),
    new BangunRuang("Tabung", 0, 7, 10),
];

echo "<table border='6' cellpadding='8' cellspacing='5'>";
echo "<tr>
        <th>Jenis Bangun Ruang</th>
        <th>Sisi</th>
        <th>Jari-jari</th>
        <th>Tinggi</th>
        <th>Volume</th>
      </tr>";

foreach ($bangunRuang as $b) {
    echo "<tr>";
    echo "<td>{$b->jenis}</td>";
    echo "<td>{$b->sisi}</td>";
    echo "<td>{$b->jari}</td>";
    echo "<td>{$b->tinggi}</td>";
    echo "<td>" . number_format($b->hitungVolume(), 2) . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
