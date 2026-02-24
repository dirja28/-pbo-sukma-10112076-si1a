<?php
class PegadaianSyariah {
    public $pinjaman, $bunga, $lama_angsuran, $keterlambatan;
    private $denda_per_hari = 0.0015;
    public function __construct($pinjaman, $bunga, $lama_angsuran, $keterlambatan) {
        $this->pinjaman = $pinjaman;
        $this->bunga = $bunga;
        $this->lama_angsuran = $lama_angsuran;
        $this->keterlambatan = $keterlambatan;
    }
    // menghitung total pinjaman
    public function totalPinjaman() {
        return $this->pinjaman * (1 + $this->bunga / 100);
    }
    // Menghitung angsuran per bulan
    public function angsuran() {
        if ($this->lama_angsuran == 0) return 0;
        return $this->totalPinjaman() / $this->lama_angsuran;
    }
    // Menghitung denda keterlambatan
    public function denda() {
        return $this->angsuran() * $this->denda_per_hari * $this->keterlambatan;
    }
    // Total bayar 
    public function totalBayar() {
        return $this->angsuran() + $this->denda();
    }
}
// Mengambil data dari form jika disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pinjaman = floatval($_POST['pinjaman']);
    $bunga = floatval($_POST['bunga']);
    $lama = intval($_POST['lama']);
    $terlambat = intval($_POST['terlambat']);
    $calc = new PegadaianSyariah($pinjaman, $bunga, $lama, $terlambat);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hitung Pinjaman Pegadaian Syariah</title>
</head>
<body>
<h2>Penghitung Angsuran Pegadaian Syariah</h2>
<form method="post">
    Pinjaman (Rp): <input type="number" name="pinjaman" required value="<?= $_POST['pinjaman'] ?? '' ?>"><br><br>
    Bunga (%) : <input type="number" step="0.01" name="bunga" required value="<?= $_POST['bunga'] ?? '' ?>"><br><br>
    Lama Angsuran (bulan): <input type="number" name="lama" required value="<?= $_POST['lama'] ?? '' ?>"><br><br>
    Keterlambatan (hari): <input type="number" name="terlambat" required value="<?= $_POST['terlambat'] ?? 0 ?>"><br><br>
    <button type="submit">Hitung</button>
</form>
<?php if (isset($calc)): ?>
    <h3>Hasil Perhitungan:</h3>
    <p>Total Pinjaman: Rp <?= number_format($calc->totalPinjaman(), 0, ',', '.') ?></p>
    <p>Angsuran per bulan: Rp <?= number_format($calc->angsuran(), 0, ',', '.') ?></p>
    <p>Denda keterlambatan: Rp <?= number_format($calc->denda(), 0, ',', '.') ?></p>
    <p><b>Total Pembayaran: Rp <?= number_format($calc->totalBayar(), 0, ',', '.') ?></b></p>
<?php endif; ?>
</body>
</html>