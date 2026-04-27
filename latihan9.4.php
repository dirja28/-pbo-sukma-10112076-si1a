<?php
class komputer {
    private $jenis_processor = "Intel Core i7-4790 3.6Ghz";
    protected $jenis_RAM = "DDR 4";
    public $jenis_VGA = "PCI Express";

    public function tampilkan_processor() {
        return $this->jenis_processor;
    }

    public function tampilkan_jenisprocessor() {
        return $this->jenis_processor;
    }

    protected function tampilkan_ram() {
        return $this->jenis_RAM;
    }

    protected function tampilkan_vga() {
        return $this->jenis_VGA;
    }

    public function tampilkan_vga2() {
        return $this->jenis_VGA;
    }
}

class laptop extends komputer {
    public function display_processor() {
        return $this->tampilkan_processor();
    }

    public function display_processor2() {
        return $this->tampilkan_jenisprocessor();
    }

    public function display_ram() {
        return $this->tampilkan_ram();
    }

    public function display_vga() {
        return $this->tampilkan_vga();
    }
}

$komputer = new komputer();
$leptop = new laptop();

echo "Line 61 : ".$komputer->tampilkan_processor()."<br />";
echo "Line 62 : ".$leptop->display_processor()."<br />";
echo "Line 63 : ".$leptop->display_processor2()."<br />";
echo "Line 64 : ".$leptop->tampilkan_jenisprocessor()."<br />";
echo "Line 65 : ".$leptop->display_ram()."<br />";
echo "Line 66 : ".$leptop->display_vga()."<br />";
echo "Line 67 : ".$leptop->tampilkan_vga2()."<br />";
?>
