<?php
// Class Induk: Tabungan
class Tabungan {
    // Properti dengan enkapsulasi
    private $saldo;

    // Constructor untuk inisialisasi saldo awal
    public function __construct($saldoAwal) {
        $this->saldo = $saldoAwal;
    }

    // Method untuk setor tunai
    public function setor($jumlah) {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
            echo "Setor berhasil: Rp $jumlah\n";
        } else {
            echo "Jumlah setor tidak valid!\n";
        }
    }

    // Method untuk tarik tunai
    public function tarik($jumlah) {
        if ($jumlah > 0 && $jumlah <= $this->saldo) {
            $this->saldo -= $jumlah;
            echo "Tarik berhasil: Rp $jumlah\n";
        } else {
            echo "Saldo tidak cukup atau jumlah tidak valid!\n";
        }
    }

    // Method untuk melihat saldo
    public function getSaldo() {
        return $this->saldo;
    }
}

// Class Anak: Siswa
class Siswa {
    private $nama;
    private $tabungan;

    // Constructor untuk inisialisasi nama dan saldo awal
    public function __construct($nama, $saldoAwal) {
        $this->nama = $nama;
        $this->tabungan = new Tabungan($saldoAwal);
    }

    // Method untuk setor tunai
    public function setorTunai($jumlah) {
        echo "{$this->nama} melakukan setor \n";
        $this->tabungan->setor($jumlah);
    }

    // Method untuk tarik tunai
    public function tarikTunai($jumlah) {
        echo " {$this->nama} melakukan tarik \n";
        $this->tabungan->tarik($jumlah);
    }

    // Method untuk menampilkan saldo
    public function tampilSaldo() {
        echo "Saldo {$this->nama}: Rp " . $this->tabungan->getSaldo() . "\n";
    }
}

// Program Utama (Command Prompt dengan fgets)
$siswaList = [
    new Siswa("Siswa1 Hani", 100000),
    new Siswa("Siswa2 Sukma", 150000),
    new Siswa("Siswa3 Nura", 200000)
];

// Menampilkan saldo awal
echo " Saldo Awal \n";
foreach ($siswaList as $siswa) {
    $siswa->tampilSaldo();
}

// Menu interaktif
while (true) {
    echo "\nPilih siswa (1-Hani, 2-Sukma, 3-Nura) atau 0 untuk keluar: ";
    $pilih = trim(fgets(STDIN));

    if ($pilih == 0) {
        echo "Program selesai.\n";
        break;
    }

    if ($pilih >= 1 && $pilih <= 3) {
        $siswa = $siswaList[$pilih - 1];
        echo "1. Setor Tunai\n";
        echo "2. Tarik Tunai\n";
        echo "Pilih transaksi: ";
        $transaksi = trim(fgets(STDIN));

        echo "Masukkan jumlah: ";
        $jumlah = trim(fgets(STDIN));

        if ($transaksi == 1) {
            $siswa->setorTunai($jumlah);
        } elseif ($transaksi == 2) {
            $siswa->tarikTunai($jumlah);
        } else {
            echo "Pilihan tidak valid!\n";
        }

        $siswa->tampilSaldo();
    } else {
        echo "Siswa tidak ditemukan!\n";
    }
}
?>
