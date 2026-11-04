<?php
class Hewan
{
    public function suara()
    {
        echo "Suara hewan";
    }
}
class Kucing extends Hewan
{
    public function suara()
    {
        echo "Meong";
    }
}
class Anjing extends Hewan
{
    public function suara()
    {
        echo "Guk guk";
    }
}
$kucing = new Kucing();
$anjing = new Anjing();
$kucing->suara();
echo "<br>";
$anjing->suara();
