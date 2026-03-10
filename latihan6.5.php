<?php

function formatRupiah($angka): string {
    return "Rp " . number_format(num: $angka, decimals: 0, decimal_separator: ',', thousands_separator: '.');
}

class BelanjaWarung {
    public $nama;
    public $barang;
    public $harga;
    public $jumlah;
    public $member;

    public function __construct($nama, $barang, $harga, $jumlah, $member) {
        $this->nama = $nama;
        $this->barang = $barang;
        $this->harga = $harga;
        $this->jumlah = $jumlah;
        $this->member = $member;
    }

    public function hitungSubtotal(): float|int {
        return $this->harga * $this->jumlah;
    }

    public function hitungDiskon($subtotal): int {
        $diskon = 0;
        if ($this->member == true) {
            if ($subtotal > 1000000) {
                $diskon = 150000;
            } elseif ($subtotal > 500000) {
                $diskon = 50000;
            }
        } else {
            if ($subtotal > 500000) {
                $diskon = 5000;
            }
        }
        return $diskon;
    }

    public function total(): float|int {
        $subtotal = $this->hitungSubtotal();
        $diskon = $this->hitungDiskon($subtotal);
        return $subtotal - $diskon;
    }
}

$databelanja = [
    [
        "nama" => "Sukma",
        "barang" => "Beras",
        "harga" => 100000,
        "jumlah" => 5,
        "member" => true
    ],
    [
        "nama" => "Rina",
        "barang" => "Gula",
        "harga" => 15000,
        "jumlah" => 10,
        "member" => false
    ],
    [
        "nama" => "Budi",
        "barang" => "Minyak Goreng",
        "harga" => 20000,
        "jumlah" => 3,
        "member" => true
    ]
];

echo "<table border='4' cellpadding='6'>";
echo "<tr><th>No</th><th>Nama</th><th>Member</th><th>Barang</th><th>Harga</th><th>Jumlah</th><th>Subtotal</th><th>Diskon</th><th>Total</th></tr>";

$no = 1;
foreach ($databelanja as $belanja) {
    $belanjaObj = new BelanjaWarung($belanja["nama"], $belanja["barang"], $belanja["harga"], $belanja["jumlah"], $belanja["member"]);

    $subtotal = $belanjaObj->hitungSubtotal();
    $diskon = $belanjaObj->hitungDiskon($subtotal);
    $total = $belanjaObj->total();

    echo "<tr>";
    echo "<td>$no</td>";
    echo "<td>" . $belanjaObj->nama . "</td>";
    echo "<td>" . ($belanjaObj->member ? "Ya" : "Tidak") . "</td>";
    echo "<td>" . $belanjaObj->barang . "</td>";
    echo "<td>" . formatRupiah($belanjaObj->harga) . "</td>";
    echo "<td>" . $belanjaObj->jumlah . "</td>";
    echo "<td>" . formatRupiah($subtotal) . "</td>";
    echo "<td>" . formatRupiah($diskon) . "</td>";
    echo "<td>" . formatRupiah($total) . "</td>";
    echo "</tr>";
    $no++;
}

echo "</table>";
?>