<?php

class Product
{
    public  $title,
        $author,
        $publisher,
        $cost;
    public function __construct($title = "Judul", $author = "Pembuat", $publisher = "Penerbit", $cost = "Harga")
    {
        $this->$title       = $title;
        $this->$author      = $author;
        $this->$publisher   = $publisher;
        $this->$cost        = $cost;
    }

    public function getLabel()
    {
        return "$this->author, $this->publisher";
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

$produk1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", "20000");
$produk2 = new Product("One Piece", "Eichiiro Oda", "Shonen Jump", "20000");
$produk3 = new Product("Minecraft", "Notch", "Mohjang", "300000");

$infoProduct1 = new PrintProductInfo();
$infoProduct2 = new PrintProductInfo();

echo $infoProduct1->Print($product1);
echo "<br>";
echo $infoProduct1->Print($product2);
echo "<br>";
echo $infoProduct2->Print($product3);
echo "<br>";
