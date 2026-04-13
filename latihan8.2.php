<?php
class Manusia {
    function __construct() {
        echo "Construct dijalankan<br/>";
    }

    function __destruct() {
        echo "Destruct dijalankan<br/>";
    }

    function tampilkan_nama() {
        return "Nama saya mahasiswa SI<br/>";
    }
}

$m = new Manusia();
echo $m->tampilkan_nama();
?>