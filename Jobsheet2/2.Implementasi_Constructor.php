<?php
// Mendefinisikan kelas Mahasiswa
class Mahasiswa {
    // Atribut kelas
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk inisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "<br> Nama: $this->nama </br> <br> NIM: $this->nim </br> <br> Jurusan: $this->jurusan </br>";
    }
}

// Instansiasi objek dengan constructor
$mahasiswa1 = new Mahasiswa("Noni Aprillia", "230102040", "Komputer dan Bisnis");

// Menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
?>
