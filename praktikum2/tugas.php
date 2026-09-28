<?php

// Class Kendaraan
class Kendaraan
{
    public $nomor;
    public $merk;
    public $jenis;
    public $status;

    // Constructor
    public function __construct($nomor, $merk, $jenis, $status)
    {
        $this->nomor = $nomor;
        $this->merk = $merk;
        $this->jenis = $jenis;
        $this->status = $status;
    }

    // Method untuk menampilkan data kendaraan
    public function tampilkanData()
    {
        echo "Nomor Kendaraan : " . $this->nomor . "<br>";
        echo "Merk             : " . $this->merk . "<br>";
        echo "Jenis            : " . $this->jenis . "<br>";
        echo "Status           : " . $this->status . "<br>";
    }

    // Method untuk mengecek status kendaraan
    public function statusKendaraan()
    {
        return $this->status;
    }
}


// Class Pelanggan
class Pelanggan
{
    public $id;
    public $nama;
    public $alamat;

    // Constructor
    public function __construct($id, $nama, $alamat)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    // Method untuk menampilkan data pelanggan
    public function tampilkanData()
    {
        echo "ID Pelanggan : " . $this->id . "<br>";
        echo "Nama         : " . $this->nama . "<br>";
        echo "Alamat       : " . $this->alamat . "<br>";
    }

    // Method untuk menyewa kendaraan
    public function sewaKendaraan($kendaraan)
    {
        if ($kendaraan->statusKendaraan() == "Tersedia") {
            $kendaraan->status = "Disewa";

            echo $this->nama . " berhasil menyewa kendaraan "
                . $kendaraan->merk . " (" . $kendaraan->jenis . ").<br>";
        } else {
            echo "Kendaraan " . $kendaraan->merk . " sedang tidak tersedia.<br>";
        }
    }
}


// Membuat object kendaraan
$kendaraan1 = new Kendaraan(
    "K001",
    "Toyota Avanza",
    "Mobil",
    "Tersedia"
);

$kendaraan2 = new Kendaraan(
    "K002",
    "Honda Vario",
    "Motor",
    "Tersedia"
);


// Membuat object pelanggan
$pelanggan1 = new Pelanggan(
    "P001",
    "Andi",
    "Ponorogo"
);

$pelanggan2 = new Pelanggan(
    "P002",
    "Budi",
    "Madiun"
);


// Menampilkan data kendaraan
echo "<h2>Data Kendaraan</h2>";

$kendaraan1->tampilkanData();

echo "<br>";

$kendaraan2->tampilkanData();


// Menampilkan data pelanggan
echo "<h2>Data Pelanggan</h2>";

$pelanggan1->tampilkanData();

echo "<br>";

$pelanggan2->tampilkanData();


// Proses penyewaan kendaraan
echo "<h2>Proses Rental</h2>";

$pelanggan1->sewaKendaraan($kendaraan1);

echo "<br>";

$kendaraan1->tampilkanData();

?>