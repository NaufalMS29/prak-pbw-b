<?php
class Mahasiswa
{
    public $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function tampilNama()
    {
        echo $this->nama;
    }
}
$mhs = new Mahasiswa("Budi");
$mhs->tampilNama();
