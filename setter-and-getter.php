<?php

//MENGISI CLASS PRODUK
class Product
{
    private $title,
        $author,
        $publisher,
        $discount = 0,
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

    //SETTER GETTER JUDUL 
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }


    //SETTER GETTER PENULIS/PEMBUAT
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }


    //SETTER GETTER PENERBIT/PENGEDAR
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }


    //SETTER GETTER DISKON
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function getDiscount()
    {
        return $this->discount;
    }


    //SETTER GETTER HARGA

    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    public function getCost()
    {
        return $this->cost - ($this->cost * $this->discount / 100);
    }
}

//MEMBUAT CLASS CHILD DARI CLASS PRODUCT

//MEMBUAT CLASS MANGA
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

//MEMBUAT CLASS CHILD GAME
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

//HASIL LAYAR / FRONT-END
echo $produk1->detailInfo();
echo "<br>";
echo $produk2->detailInfo();
echo "<br>";
echo $produk3->detailInfo();

echo "<hr>";
