<?php


class animal
{
    public $jumlah_kaki, $bisa_terbang;
}

class Ayam extends animal
{
    function bersuara()
    {
        return "kukuruyuk";
    }
}

class Anjing extends animal
{
    function bersuara()
    {
        return "guk guk";
    }
}

class Kambing extends animal
{
    function bersuara()
    {
        return "embee";
    }
}

class Kucing extends animal
{
    function bersuara()
    {
        return "meong meong";
    }
}

echo "animal <br>";
echo "<hr>";

// Ayam
$Kokok = new ayam;
$Kokok->jumlah_kaki = 2;
$Kokok->bisa_terbang = "bisa terbang";

echo "Kokok adalah ayam kesayanganku <br>";
echo "punya kaki sebanyak : " . $Kokok->jumlah_kaki . "<br>";
echo $Kokok->bisa_terbang . "<br>";
echo "suaranya : " . $Kokok->bersuara() . "<br>";

echo "<hr>";

// Anjing
$Dogi = new Anjing;
$Dogi->jumlah_kaki = 4;
$Dogi->bisa_terbang = "tidak bisa terbang";

echo "Dogi adalah seekor anjing laki laki <br>";
echo "punya kaki sebanyak : " . $Dogi->jumlah_kaki . "<br>";
echo $Dogi->bisa_terbang . "<br>";
echo "suaranya : " . $Dogi->bersuara() . "<br>";

echo "<hr>";

// Kambing
$Moli = new kambing;
$Moli->jumlah_kaki = 4;
$Moli->bisa_terbang = "tidak bisa terbang";

echo "Moli adalah seekor Kambing <br>";
echo "punya kaki sebanyak : " .  $Moli->jumlah_kaki . "<br>";
echo $Moli->bisa_terbang . "<br>";
echo "suaranya : " . $Moli->bersuara() . "<br>";

echo "<hr>";

// Kucing
$Kitty = new Kucing;
$Kitty->jumlah_kaki = 4;
$Kitty->bisa_terbang = "tidak bisa terbang";

echo "Kitty adalah seekor anak kucing <br>";
echo "punya kaki sebanyak : " . $Kitty->jumlah_kaki . "<br>";
echo $Kitty->bisa_terbang . "<br>";
echo "suaranya : " . $Kitty->bersuara() . "<br>";

echo "<hr>";
