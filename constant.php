<?php

//DEFINE CONSTANT
define('NAMA', 'Hatsune Miku');
define('TTL', '1 September');

//MEMBUAT CLASS
class Coba
{
    const NAMA = 'Hatsune Miku';
    const TTL = '1 September';
}

echo Coba::NAMA;
echo "<br>";
echo Coba::TTL;
