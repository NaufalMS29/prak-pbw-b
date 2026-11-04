<?php
interface Pembayaran
{
    public function bayar();
}
class TransferBank implements Pembayaran
{
    public function bayar()
    {
        echo "Pembayaran melalui transfer bank";
    }
}
class EWallet implements Pembayaran
{
    public function bayar()
    {
        echo "Pembayaran melalui e-wallet";
    }
}
$bank = new TransferBank();
$bank->bayar();
echo "<br>";
$ewallet = new EWallet();
$ewallet->bayar();
