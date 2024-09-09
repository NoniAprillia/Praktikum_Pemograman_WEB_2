<?php
// Definisi class Mahasiswa
class Mahasiswa {
    // Atribut atau properti dari class Mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan; 
    }

    // Method untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return " <br> Nama : $this->nama </br> <br> NIM : $this->nim </br> <br> Jurusan : $this->jurusan.</br>";
    }
}

// Instansiasi objek Mahasiswa dengan data tertentu
$Mahasiswa1 = new Mahasiswa("Noni Aprillia", "230102040", "Komputer dan Bisnis");

// Menampilkan data mahasiswa
echo $Mahasiswa1->tampilkanData();
?>
