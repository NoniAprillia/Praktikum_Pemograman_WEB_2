<?php
// Definisi class Mahasiswa
class Mahasiswa {
    // Atribut atau properti dari class Mahasiswa (private untuk enkapsulasi)
    private $nama;
    private $nim;
    private $jurusan;

    // Constructor untuk menginisialisasi atribut saat objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

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
$Mahasiswa1 = new Mahasiswa("Noni Aprillia", "230102040", "Komputer dan Bisnis");

// Menggunakan metode getter untuk menampilkan informasi mahasiswa
echo "Nama: " . $Mahasiswa1->getNama() . '<br>';
echo "NIM: " . $Mahasiswa1->getNim() . '<br>';
echo "Jurusan: " . $Mahasiswa1->getJurusan() . '<br><br>';

// Menggunakan metode setter untuk mengubah informasi mahasiswa
$Mahasiswa1->setNama("Aprillia");
$Mahasiswa1->setNim("230104020");
$Mahasiswa1->setJurusan("KOMBIS");

// Menampilkan informasi setelah perubahan menggunakan metode getter
echo $Mahasiswa1->getNama() . '<br>';
echo $Mahasiswa1->getNim() . '<br>';
echo $Mahasiswa1->getJurusan() . '<br>';
?>
