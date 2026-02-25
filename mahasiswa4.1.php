<?php
// Class untuk mahasiswa
class Mahasiswa {
    public $nama;
    public $kelas;
    public $matkuliah;
    public $nilai;

    public function tampilkaninfo() {
        return "Nama: " . $this->nama . "<br>" .
               "Kelas: " . $this->kelas . "<br>" .
               "Mata Kuliah: " . $this->matkuliah . "<br>" .
               "Nilai: " . $this->nilai . "<br>";
    }
}

// Fungsi untuk menampilkan data mahasiswa
function Data_Mahasiswa() {
    $data = [
        'nama' => $_POST['nama'],
        'kelas' => $_POST['kelas'],
        'matkuliah' => $_POST['matkul'],
        'nilai' => $_POST['nilai']
    ];

    // Instansiasi objek mahasiswa
    $mahasiswa1 = new Mahasiswa();
    $mahasiswa1->nama = $data['nama'];
    $mahasiswa1->kelas = $data['kelas'];
    $mahasiswa1->matkuliah = $data['matkuliah'];
    $mahasiswa1->nilai = $data['nilai'];

    // Output hasil
    echo "<h2>Data Mahasiswa</h2>";
    echo $mahasiswa1->tampilkaninfo();
}

// Panggil fungsi
Data_Mahasiswa();
?>