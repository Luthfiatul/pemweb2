<?php 
 
class Produk 
{ 
    public $kode; 
    public $nama; 
    public $harga; 
    public $stok;
    public $diskon; 
 
    // Constructor 
    public function __construct($kode, $nama, $harga, $stok, $diskon) 
    { 
        $this->kode = $kode; 
        $this->nama = $nama; 
        $this->harga = $harga; 
        $this->stok = $stok;
        $this->diskon = $diskon; 
    } 
 
    // Method menampilkan data 
    public function tampilkanData() 
    { 
        echo "Kode Produk : " . $this->kode . "<br>"; 
        echo "Nama Produk : " . $this->nama . "<br>"; 
        echo "Harga       : Rp " . $this->harga . "<br>"; 
        echo "Stok        : " . $this->stok . "<br>"; 
        echo "Diskon      : " . $this->diskon . "%<br>";
        echo "Harga Setelah Diskon : Rp " . $this->hitungHargaDiskon() . "<br>";
        echo "Nilai Stok  : Rp " . $this->hitungNilaiStok() . "<br><br>"; 
    } 
 
    // Method menghitung harga setelah diskon
    public function hitungHargaDiskon()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    // Method menghitung nilai stok 
    public function hitungNilaiStok() 
    { 
        return $this->hitungHargaDiskon() * $this->stok; 
    } 
} 
 
// Membuat object 
$produk1 = new Produk("P001", "Laptop", 7000000, 10, 10); 
$produk2 = new Produk("P002", "Mouse", 150000, 25, 5); 
 
// Menampilkan data 
$produk1->tampilkanData(); 
$produk2->tampilkanData(); 
 
?>