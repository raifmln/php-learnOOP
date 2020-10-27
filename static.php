<?php

//MEMBUAT CLASS
class ContohStatic
{
    public static $angka = 2;

    public static function goodBye()
    {
        return "ADIOS";
    }

    public static function halo()
    {
        return "Hello World! " . self::$angka++ . " times";
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::goodBye();
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
