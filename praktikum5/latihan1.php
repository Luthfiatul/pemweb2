<?php

class Mahasiswa {

    public $nama;
    private $nilai;


}

$mhs1 = new Mahasiswa();
$mhs1->nama= "Andi";
// $mhs1->nilai= 90;
echo "Nama: "  . $mhs1->nama;
// echo "Nilai: "  . $mhs1->nilai;

?>