<?php
class Rekening
{
    private $saldo = 0;

    public function setSaldo($saldo)
    {
        if ($saldo >= 0) {
            $this->saldo = $saldo;
        }
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}
$rekening = new Rekening();
$rekening->setSaldo(1000000);
echo $rekening->getSaldo();
