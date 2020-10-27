<?php

//MENGISI CLASS PRODUK
class Product
{
    public  $title,
        $author,
        $publisher,
        $cost;

    //MEMBUAT CONSTRUCT CLASS PRODUCT
    public function __construct($title = "Judul", $author = "Pembuat", $publisher = "Penerbit", $cost = 0, $totalPages = 0, $playTime = 0)
    {
        $this->$title       = $title;
        $this->$author      = $author;
        $this->$publisher   = $publisher;
        $this->$cost        = $cost;
    }

    //MEMBUAT STRUKTUR DASAR STRING
    public function detailInfo()
    {
        $str = "{$this->type} : {$this->title} // {$this->author} // {$this->publisher} (Rp.{$this->cost}) - ";
        return $str;
    }
}

//MEMBUAT CLASS CHILD DARI CLASS PRODUCT
class Manga extends Product
{
    public $totalPages;

    public function __construct($title = "Judul", $author = "Pembuat", $publisher = "Penerbit", $cost = 0, $totalPages = 0)
    {
        //OVERRIDING KE CONSTRUCT PARENT
        parent::__construct($title, $author, $publisher, $cost);

        $this->totalPages = $totalPages;
    }

    public function detailInfo()
    {
        //OVERRIDING KE METHOD detailInfo() PARENT
        $str = "Manga : " . parent::detailInfo() . " - {$this->totalPages} Pages.";
        return $str;
    }
}

class Game extends Product
{
    public $playTime;

    public function __construct($title = "Judul", $author = "Pembuat", $publisher = "Penerbit", $cost = 0, $playTime = 0)
    {
        //OVERRIDING KE CONSTRUCT PARENT
        parent::__construct($title, $author, $publisher, $cost);

        $this->playTime = $playTime;
    }

    public function detailInfo()
    {
        //OVERRIDING KE METHOD detailInfo() PARENT
        $str = "Game : " . parent::detailInfo() . " - {$this->playTime} Hours.";
        return $str;
    }
}

$produk1 = new Manga("Naruto", "Masashi Kishimoto", "Shonen Jump", 20000, 200);
$produk2 = new Manga("One Piece", "Eichiiro Oda", "Shonen Jump", 20000, 225);
$produk3 = new Game("Minecraft", "Notch", "Mohjang", 300000, 50);

echo $produk1->detailInfo();
echo "<br>";
echo $produk2->detailInfo();
echo "<br>";
echo $produk3->detailInfo();
