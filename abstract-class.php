<?php

//MENGISI CLASS PRODUK
abstract class Product
{
    private $title,
        $author,
        $publisher,
        $discount = 0,
        $cost;

    //MEMBUAT CONSTRUCT CLASS PRODUCT
    public function __construct($title = "Judul", $author = "Pembuat", $publisher = "Penerbit", $cost = 0)
    {
        $this->title       = $title;
        $this->author      = $author;
        $this->publisher   = $publisher;
        $this->cost        = $cost;
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

    //MEMBUAT STRUKTUR DASAR STRING
    abstract public function detailInfo();

    public function getInfo()
    {
        $str = " {$this->title} // {$this->author} // {$this->publisher} (Rp.{$this->cost}) ";
        return $str;
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
        $str = "Manga : " . $this->getInfo() . " - {$this->totalPages} Pages.";
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
        $str = "Game : " . $this->getInfo() . " - {$this->playTime} Hours.";
        return $str;
    }
}

//MEMBUAT CLASS CETAK INFO PRODUK
class PrintProductInfo
{
    //MEMBUAT ARRAY LIST PRODUCT
    public $listProduct = array();

    //MEMBUAT METHOD TAMBAH PRODUK
    public function addProduct(Product $product)
    {
        $this->listProduct[] = $product;
    }

    //MEMBUAT METHOD CETAK 
    public function print()
    {
        $str = "LIST OF PRODUCTS : <br>";

        //PERULANGAN LIST PRODUK
        foreach ($this->listProduct as $p) {
            $str .= "- {$p->detailInfo()} <br>";
        }
        return $str;
    }
}


//INSTANSIASI 
$produk1 = new Manga("Naruto", "Masashi Kishimoto", "Shonen Jump", 20000, 200);
$produk2 = new Manga("One Piece", "Eichiiro Oda", "Shonen Jump", 20000, 225);
$produk3 = new Game("Minecraft", "Notch", "Mohjang", 300000, 50);

$printProduct = new PrintProductInfo();
$printProduct->addProduct($produk1);
$printProduct->addProduct($produk2);
$printProduct->addProduct($produk3);

//HASIL LAYAR / FRONT-END
echo $printProduct->Print();
