<?php

//Mengimport file yang diperlukan dan require_one digunakan untuk memastikan bahwa filenya hanya di include sekali
require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

//Membuat objek dengan nama sheep dari kelas animal dengan nama shaun
$sheep = new Animal("shaun");
//displayinfo() berfungsi untuk menampilkan informasi tentang hewannya, baik dari nama, kaki, dll
$sheep->displayInfo();
echo '<br>';

//Membuat objek dengan nama kodok dari kelas animal dengan nama buduk
$kodok = new Frog("buduk");
//displayinfo() berfungsi untuk menampilkan informasi tentang hewannya, baik dari nama, kaki, dll
$kodok->displayInfo();
//Memanggil metode jump yang menampilkan pesan Hop-hop
$kodok->jump();
echo '<br>';

//Membuat objek dengan nama sungokong dari kelas animal dengan nama kera sakti
$sungokong = new Ape("kera sakti");
echo '<br>';
//displayinfo() berfungsi untuk menampilkan informasi tentang hewannya, baik dari nama, kaki, dll
$sungokong->displayInfo();
//Menampilkan pesan teks atau suara teriakan kera ketika metode ini di panggil
$sungokong->yell();
