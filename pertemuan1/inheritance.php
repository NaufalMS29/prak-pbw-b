<?php
class Kendaraan
{
    public $merk;
    public function tampilMerk()
    {
        echo $this->merk;
    }
}
class Mobil extends Kendaraan
{
    public $jumlahRoda = 4;
}
$mobil = new Mobil();
$mobil->merk = "Honda";
$mobil->tampilMerk();
echo "<br>";
echo $mobil->jumlahRoda;
