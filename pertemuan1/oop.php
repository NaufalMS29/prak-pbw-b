<?php
class Mahasiswa
{
    public $nama;
    public function tampilNama()
    {
        echo $this->nama;
    }
}
$mhs = new Mahasiswa();
$mhs->nama = "Andi";
$mhs->tampilNama();
