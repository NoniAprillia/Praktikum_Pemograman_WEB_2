<?php
// Definisi class Mahasiswa
class Mahasiswa {
    // Atribut atau properti dari class Mahasiswa (private untuk enkapsulasi)
    private $nama;
    private $nim;
    private $jurusan;

    // Method getter untuk mendapatkan nama
    public function getNama() { 
        return $this->nama;
    }

    // Method getter untuk mendapatkan NIM
    public function getNim() {
        return $this->nim;
    }

    // Method getter untuk mendapatkan jurusan
    public function getJurusan() {
        return $this->jurusan;   
    }
    
    // Method setter untuk mengubah nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Method setter untuk mengubah NIM
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Method setter untuk mengubah jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}

// Membuat objek Mahasiswa dengan data awal
$Mahasiswa1 = new Mahasiswa();

$Mahasiswa1->setNama("Aprillia");
$Mahasiswa1->setNim("230104020");
$Mahasiswa1->setJurusan("KOMBIS");

// Menggunakan metode getter untuk menampilkan informasi mahasiswa
echo "Nama: " . $Mahasiswa1->getNama() . '<br>';
echo "NIM: " . $Mahasiswa1->getNim() . '<br>';
echo "Jurusan: " . $Mahasiswa1->getJurusan() . '<br><br>';

?>
