<?php
// Definisi class Pengguna dengan atribut nama
class Pengguna {
    // Atribut nama yang bersifat protected (dapat diakses oleh class turunannya)
    protected $nama;

    // Constructor untuk menginisialisasi atribut nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Method getter untuk mendapatkan nama
    public function getNama() {
        return $this->nama;
    }
}

// Definisi class Dosen yang merupakan turunan dari class Pengguna
class Dosen extends Pengguna {
    // Atribut mataKuliah yang bersifat private
    private $mataKuliah;

    // Constructor untuk menginisialisasi atribut nama dan mataKuliah
    public function __construct($nama, $mataKuliah) {
        // Memanggil constructor dari class induk (Pengguna)
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    // Method getter untuk mendapatkan mataKuliah
    public function getMatakuliah() {
        return $this->mataKuliah;
    }
}

// Membuat objek Dosen dengan nama dan mataKuliah tertentu
$Pengguna1 = new Dosen("Abda'u", "Pemrograman Web 2");

// Menampilkan nama dan mataKuliah dari objek Dosen
echo $Pengguna1->getNama() . '<br>';
echo $Pengguna1->getMatakuliah() . '<br>'; // Output: Pemrograman Web 2
?>
