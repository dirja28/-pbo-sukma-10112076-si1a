<?php

// Membuat kelas LatihanPraktikum
class LatihanPraktikum {
    public $nama;
    public $nim;
    public $jurusan;

// Konstruktor untuk menginisialisasi properti
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

// Metode untuk menampilkan informasi mahasiswa
    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
    
// Destruktor untuk menampilkan pesan saat objek dihancurkan
    public function __destruct() {
        echo "Objek " . $this->nama . " telah dihancurkan.<br>";
    }
}  

//class turunan dari LatihanPraktikum
class mahasiswaaktif extends LatihanPraktikum {
    public $status;
    public function __construct($nama, $nim, $jurusan, $status) {
        parent::__construct($nama, $nim, $jurusan);
        $this->status = $status;
    }

// Override metode tampilkanInfo untuk menampilkan status mahasiswa
    public function tampilkanInfo() {
        parent::tampilkanInfo();
        echo "Status: " . $this->status . "<br>";
    }
}

// Membuat objek mahasiswa
$mahasiswa1 = new LatihanPraktikum("Hani", "10112037", "Teknik Informatika");
$mahasiswa2 = new LatihanPraktikum("Sukma", "10112076", "Sistem Informasi");
$mahasiswa3 = new LatihanPraktikum("Nura", "10112089", "Manajemen Informatika");
$mahasiswa4 = new LatihanPraktikum("Dina", "10112045", "Teknik Komputer");
$mahasiswa5 = new mahasiswaaktif("Ali", "10112090", "Teknik Elektro", "Aktif");

// Menampilkan informasi mahasiswa dan membuat tabel (array)
$data = [
    ["nama" => "Hani", "nim" => "10112037", "jurusan" => "Teknik Informatika"],
    ["nama" => "Sukma", "nim" => "10112076", "jurusan" => "Sistem Informasi"],
    ["nama" => "Nura", "nim" => "10112089", "jurusan" => "Manajemen Informatika"],
    ["nama" => "Dina", "nim" => "10112045", "jurusan" => "Teknik Komputer"]
]; 

// Menampilkan data dalam bentuk tabel HTML
echo "<table border='4'>";
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['nim'] . "</td>";
    echo "<td>" . $row['jurusan'] . "</td>";
}
echo "</table>"; 

// Menampilkan data dalam bentuk tabel teks di terminal
echo "+------------------+----------------+-----------------------+\n";
echo "| Nama             | NIM            | Jurusan               |\n";
echo "+------------------+----------------+-----------------------+\n"; 

// Menampilkan data dalam bentuk tabel teks
foreach ($data as $row) {
    printf("| %-16s | %-14s | %-21s |\n", $row['nama'], $row['nim'], $row['jurusan']);
}

echo "Jumlah Mahasiswa: " . count($data) . "<br>";

?>