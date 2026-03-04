<!DOCTYPE html>
<html>
<head>
    <title>Form Tugas 5</title>
</head>
<body>
    <h2>Form Tugas 5</h2>
    <form method="post" action="tugas5.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="kartuBelanja">Kartu Belanja:</label>
        <input type="checkbox" id="kartuBelanja" name="kartuBelanja"><br><br>
        <label for="totalBelanja">Total Belanja:</label>
        <input type="number" id="totalBelanja" name="totalBelanja" required><br><br>
        <input type="submit" value="Hitung Belanja">
    </form>