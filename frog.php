<?php

require_once 'animal.php';

//Mengextends kelas frog ke Animal
class Frog extends Animal
{
    //Memberikan function jump yaitu apabila dia melompat, dia akan mengeluarkan suara Hop-Hop
    public function jump()
    {
        echo "Jump: Hop-Hop" . PHP_EOL;
    }
}

/*
PHP_EOL adalah merepresentasikan baris baru
*/
