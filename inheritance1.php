<?php

class Product
{
    public  $title,
        $author,
        $publisher,
        $cost,
        $totalPages,
        $playTime,
        $type;

    public function __construct($title = "Judul", $author = "Pembuat", $publisher = "Penerbit", $cost = 0, $totalPages = 0, $playTime = 0, $type)
    {
        $this->$title       = $title;
        $this->$author      = $author;
        $this->$publisher   = $publisher;
        $this->$cost        = $cost;
        $this->totalPages   = $totalPages;
        $this->playTime     = $playTime;
        $this->type         = $type;
    }

    public function getLabel()
    {
        return "$this->author, $this->publisher";
    }

    public function detailInfo()
    {
        $str = "{$this->type} : {$this->title} // {$this->author} // {$this->publisher} (Rp.{$this->cost}) - ";
        if ($this->type == "Manga") {
            $str .= "{$this->totalPages} pages";
        } elseif ($this->type == "Game") {
            $str .= "{$this->playTime} Hours";
        }

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

$produk1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 20000, 200, 0, "Manga");
$produk2 = new Product("One Piece", "Eichiiro Oda", "Shonen Jump", 20000, 225, 0, "Manga");
$produk3 = new Product("Minecraft", "Notch", "Mohjang", 300000, 0, 50, "Game");

$infoProduct1 = new PrintProductInfo();
$infoProduct2 = new PrintProductInfo();

echo $produk1->detailInfo();
echo "<br>";
echo $produk2->detailInfo();
echo "<br>";
echo $produk3->detailInfo();
