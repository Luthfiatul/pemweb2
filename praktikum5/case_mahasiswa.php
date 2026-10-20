<?php
class Mahasiswa {
    private $nim;
    private $nama;
    private $prodi;
    private $semester;
    private $nilai;
    public function __construct($nim, $nama, $prodi, $semester){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }
     public function setNilai($nilai) {
        if($nilai >= 0 && $nilai <= 100){
            $this->nilai = $nilai;
        }else{
            echo "Nilai tidak valid.<br>";
        }
    }
    public function getNim(){
        return $this->nim;
    }
    public function getNama(){
        return $this->nama;
    }
    public function getprodi(){
        return $this->prodi;
    }
    public function getsemester(){
        return $this->semester;
    }
    public function getNilai(){
        return $this->nilai;
    }
    public function getGrade(){
        if ($this->nilai >= 80) {
            return "A";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 60) {
            return "C";
        } elseif ($this->nilai >= 50) {
            return "D";
        } else {
            return "E";
        }
    }

}
$mhs1 = new Mahasiswa("2301001", "Andi", "Sistem Informasi", 3 );
$mhs1->setNilai(85);
echo "Nim: " . $mhs1->getNim() . "<br>";
echo "Nama: " . $mhs1->getNama() . "<br>";
echo "Prodi: " . $mhs1->getProdi() . "<br>";
echo "Semester: " . $mhs1->getSemester() . "<br>";
echo "Nilai: " . $mhs1->getNilai() . "<br>";
echo "Grade: " . $mhs1->getGrade() . "<br>";
?>