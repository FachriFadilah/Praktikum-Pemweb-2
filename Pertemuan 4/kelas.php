<?php

class Mahasiswa{
    private $nama;
    private $nim;
    private $semester;

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function setSemester($semester){
        $this->semester = $semester;
    }
    public function getNama(){
        return $this->nama;
    }
    public function getNim(){
        return $this->nim;
    }
    public function getSemester(){
        return $this->semester;
    }
}

$budi = new Mahasiswa();
$budi->setNama ('Pacri El-Kaciwi');
$budi->setNim ('0110224146');
$budi->setSemester (4);

//Cetak
echo $budi->getNama() . '<br>';
echo $budi->getNim() . '<br>';
echo $budi->getSemester() . '<br>';


?>