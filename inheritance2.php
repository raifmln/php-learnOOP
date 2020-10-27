<?php

class Product
{
    public  $title,
        $author,
        $publisher,
        $cost,
        $totalPages,
        $playTime;

    public function __construct($title = "Judul", $author = "Pembuat", $publisher = "Penerbit", $cost = 0, $totalPages = 0, $playTime = 0)
    {
        $this->$title       = $title;
        $this->$author      = $author;
        $this->$publisher   = $publisher;
        $this->$cost        = $cost;
        $this->totalPages   = $totalPages;
        $this->playTime     = $playTime;
    }

    public function getLabel()
    {
        return "$this->author, $this->publisher";
    }

    public function detailInfo()
    {
        $str = "{$this->type} : {$this->title} // {$this->author} // {$this->publisher} (Rp.{$this->cost}) - ";
        return $str;
    }
}

class Manga extends Product
{
    public function detailInfo()
    {
        $str = "Manga : {$this->title} // {$this->author} // {$this->publisher} (Rp.{$this->cost}) - {$this->totalPages} Pages.";
        return $str;
    }
}

class Game extends Product
{
    public function detailInfo()
    {
        $str = "Game : {$this->title} // {$this->author} // {$this->publisher} (Rp.{$this->cost}) - {$this->playTime} Hours.";
        return $str;
    }
}


class PrintProductInfo
{
    public function Print(Product $product)
    {
        $str = "{$product->title}, {$product->getLabel()}, (Rp. {$product->cost}";
        return $str;
    }
}

$produk1 = new Manga("Naruto", "Masashi Kishimoto", "Shonen Jump", 20000, 200, 0, "Manga");
$produk2 = new Manga("One Piece", "Eichiiro Oda", "Shonen Jump", 20000, 225, 0, "Manga");
$produk3 = new Game("Minecraft", "Notch", "Mohjang", 300000, 0, 50, "Game");

$infoProduct1 = new PrintProductInfo();
$infoProduct2 = new PrintProductInfo();

echo $produk1->detailInfo();
echo "<br>";
echo $produk2->detailInfo();
echo "<br>";
echo $produk3->detailInfo();
