<?php
// Definisi class abstrak Pengguna
abstract class Pengguna {
    // Atribut nama yang bersifat protected (dapat diakses oleh class turunannya)
    protected $nama;

    // Constructor untuk menginisialisasi atribut nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Method untuk mendapatkan nilai atribut nama
    public function getNama() {
        return $this->nama;
    }

    // Method abstrak yang harus diimplementasikan oleh class turunan
    abstract public function aksesFitur();
}

// Definisi class Dosen yang merupakan turunan dari class Pengguna
class Dosen extends Pengguna {
    // Implementasi method aksesFitur untuk menampilkan akses fitur dosen
    public function aksesFitur() {
        echo $this->getNama() . "Akses Fitur Dosen.<br>";
    }
}

// Definisi class Mahasiswa yang merupakan turunan dari class Pengguna
class Mahasiswa extends Pengguna {
    // Implementasi method aksesFitur untuk menampilkan akses fitur mahasiswa
    public function aksesFitur() {
        echo $this->getNama() . "Akses Fitur Mahasiswa.<br>";
    }
}

// Membuat objek Dosen dengan nama "Bapak Wahyu"
$Dosen1 = new Dosen("Bapak Wahyu ");

// Membuat objek Mahasiswa dengan nama "Noni"
$Mahasiswa1 = new Mahasiswa("Noni ");

// Memanggil method aksesFitur dari objek Dosen
$Dosen1->aksesFitur(); // Output: Bapak Wahyu Akses Fitur Dosen.<br>

// Memanggil method aksesFitur dari objek Mahasiswa
$Mahasiswa1->aksesFitur(); // Output: Noni Akses Fitur Mahasiswa.<br>
?>
