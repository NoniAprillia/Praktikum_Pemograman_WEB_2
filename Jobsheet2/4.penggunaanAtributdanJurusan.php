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

    // Metode setter untuk mengupdate nilai nim
    public function setNim($nim) {
        $this->nim = $nim;
    }
}

// Instansiasi objek Mahasiswa
$mahasiswa1 = new Mahasiswa("Noni Aprillia", "230102040", "Kombis");

// Menampilkan data awal
echo "Data Awal: ";
echo $mahasiswa1->tampilkanData();

// Mengupdate nilai nim menggunakan metode setter
$mahasiswa1->setNim("230102041");

// Menampilkan data setelah pembaruan
echo "Data Setelah Pembaruan: ";
echo $mahasiswa1->tampilkanData();
?> 