<?php
session_start();
// membuat class mahasiswa
class Mahasiswa {
    public $nama;
    public $kelas;
    public $matkuliah;
    public $nilai;
}

if (!isset($_SESSION['data_mahasiswa'])) {
    $_SESSION['data_mahasiswa'] = [];
}

// handle reset request
if (isset($_GET['reset']) && $_GET['reset'] === 'true') {
    $_SESSION['data_mahasiswa'] = [];
}
?>

<a href="form_mahasiswa.php"> Tambah Data</a> |
<a href="?reset=true" onclick="return confirm('Hapus semua data?')"> Reset Data
</a>

<?php

// menambahkan data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mhs = new Mahasiswa();
    $mhs->nama = $_POST['nama'];
    $mhs->kelas = $_POST['kelas'];
    $mhs->matkuliah = $_POST['matkul'];
    $mhs->nilai = $_POST['nilai'];

    $_SESSION['data_mahasiswa'][] = $mhs;
}

// menampilkan data
echo "<h2>Data Mahasiswa</h2>";
// cek apakah ada data mahasiswa yang disimpan di session
if (!empty($_SESSION['data_mahasiswa'])) {

    $no = 1;
    foreach ($_SESSION['data_mahasiswa'] as $data) {
        echo "Data ke-$no <br>";
        echo "Nama : $data->nama <br>";
        echo "Kelas : $data->kelas <br>";
        echo "Matkul : $data->matkuliah <br>";
        echo "Nilai : $data->nilai <br>";
        echo "----------------------<br>";
        $no++;
    }

} else {
    echo "Belum ada data";
}
?>