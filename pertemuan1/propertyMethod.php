<?php
class PersegiPanjang
{
    public $panjang = 10;
    public $lebar = 5;

    public function hitungLuas()
    {
        return $this->panjang * $this->lebar;
    }
}
$objek = new PersegiPanjang();
echo $objek->hitungLuas();
