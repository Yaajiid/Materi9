<?php

require_once 'animal.php';

//Mengextends kelas Ape ke Animal
class Ape extends Animal
{
    public function __construct($name)
    
    {
        //Memanggil konstruktor kelas animal dengan memberikan nilai $name
        parent::__construct($name);
        //Menerima satu parameter yaitu legs dengan nilai 2
        $this->legs = 2;
    }

    //Memberikan function yell yaitu berupa suara yang dikeluarkan oleh ape (kera)
    public function yell()
    {
        echo "Yell: Auuuooooooo..." . PHP_EOL;
    }
}

/*
PHP_EOL adalah merepresentasikan baris baru
*/
