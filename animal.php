<?php

// Mendeklarasikan kelas animal
class Animal
{
    //Membuat properti untuk kelasnya
    public $name;
    public $legs = 4;
    public $cold_blooded = "no";

    //Menginisialisasi objek kelas animal saat objek nya dibuat
    //Pada konstruktor ini menerima 1 parameter yaitu nama 
    public function __construct($name)
    {
        $this->name = $name;
    }

    //
    public function displayInfo()
    {
        //Metode unutk menampilkan nama hewan, jumlah kaki dan status berdarah dingin 
        echo "Name: {$this->name}" . '<br>';
        echo "Legs: {$this->legs}" . '<br>';
        echo "Cold-blooded: {$this->cold_blooded}" . '<br>';
    }
}
