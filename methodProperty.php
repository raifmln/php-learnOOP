<?php

class Produk
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
        return "$this->title";
        return "<br>";
        return "$this->author";
        return "<br>";
        return "$this->publisher";
        return "<br>";
        return "$this->cost";
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", "20000");
$produk2 = new Produk("One Piece", "Eichiiro Oda", "Shonen Jump", "20000");
$produk3 = new Produk("Minecraft", "Notch", "Mohjang", "300000");
