<?php
class GajiKaryawan {
    public $data = [];

    // Constructor dengan parameter (data awal)
    function __construct($dataAwal = []) {
        $this->data = $dataAwal;
        echo "=== Program Gaji Karyawan Dimulai ===\n";
    }

    // Method untuk menghitung gaji pokok berdasarkan golongan
    function getGajiPokok($golongan) {
        $gajiPokok = [
            "Ib" => 1250000, "Ic" => 1300000, "Id" => 1350000,
            "IIa" => 2000000, "IIb" => 2100000, "IIc" => 2200000, "IId" => 2300000,
            "IIIa" => 2400000, "IIIb" => 2500000, "IIIc" => 2600000, "IIId" => 2700000,
            "IVa" => 2800000, "IVb" => 2900000, "IVc" => 3000000, "IVd" => 3100000
        ];
        return $gajiPokok[$golongan] ?? 0;
    }

    // Menampilkan data
    function tampilkanData() {
        echo "===== DATA GAJI KARYAWAN =====\n";
        echo "No | Nama   | Golongan | Jam Lembur | Total Gaji\n";
        $no = 1;
        foreach ($this->data as $karyawan) {
            $total = $this->getGajiPokok($karyawan['golongan']) + ($karyawan['lembur'] * 15000);
            echo "{$no} | {$karyawan['nama']} | {$karyawan['golongan']} | {$karyawan['lembur']} | Rp" . number_format($total, 0, ',', '.') . "\n";
            $no++;
        }
    }

    // Tambah data
    function tambahData($nama, $golongan, $lembur) {
        $this->data[] = ['nama' => $nama, 'golongan' => $golongan, 'lembur' => $lembur];
        echo "Data karyawan berhasil ditambahkan!\n";
    }

    // Update data
    function updateData($index, $nama, $golongan, $lembur) {
        if (isset($this->data[$index])) {
            $this->data[$index] = ['nama' => $nama, 'golongan' => $golongan, 'lembur' => $lembur];
            echo "Data karyawan berhasil diupdate!\n";
        } else {
            echo "Data tidak ditemukan!\n";
        }
    }

    // Hapus data
    function hapusData($index) {
        if (isset($this->data[$index])) {
            unset($this->data[$index]);
            echo "Data karyawan berhasil dihapus!\n";
        } else {
            echo "Data tidak ditemukan!\n";
        }
    }

    // Destructor
    function __destruct() {
        echo "=== Program Gaji Karyawan Selesai ===\n";
    }
}

// Data awal
$dataAwal = [
    ['nama' => 'Winny', 'golongan' => 'IIb', 'lembur' => 30],
    ['nama' => 'Stendy', 'golongan' => 'IIIc', 'lembur' => 32],
    ['nama' => 'Alfred', 'golongan' => 'IVb', 'lembur' => 30]
];

// Buat objek
$gaji = new GajiKaryawan($dataAwal);

// Menu sederhana
echo "===== MENU GAJI KARYAWAN =====\n";
echo "1. Tampilkan Data\n2. Tambah Data\n3. Update Data\n4. Hapus Data\n5. Keluar\n";
echo "Pilih menu: ";
$input = trim(fgets(STDIN));

switch ($input) {
    case 1:
        $gaji->tampilkanData();
        break;
    case 2:
        echo "Masukkan Nama: "; $nama = trim(fgets(STDIN));
        echo "Masukkan Golongan: "; $gol = trim(fgets(STDIN));
        echo "Masukkan Jam Lembur: "; $jam = trim(fgets(STDIN));
        $gaji->tambahData($nama, $gol, $jam);
        $gaji->tampilkanData();
        break;
    case 3:
        echo "Masukkan Nomor Data yang diupdate (mulai dari 0): "; $idx = trim(fgets(STDIN));
        echo "Nama baru: "; $nama = trim(fgets(STDIN));
        echo "Golongan baru: "; $gol = trim(fgets(STDIN));
        echo "Jam lembur baru: "; $jam = trim(fgets(STDIN));
        $gaji->updateData($idx, $nama, $gol, $jam);
        $gaji->tampilkanData();
        break;
    case 4:
        echo "Masukkan Nomor Data yang dihapus (mulai dari 0): "; $idx = trim(fgets(STDIN));
        $gaji->hapusData($idx);
        $gaji->tampilkanData();
        break;
    default:
        echo "Keluar dari program.\n";
        break;
}
?>