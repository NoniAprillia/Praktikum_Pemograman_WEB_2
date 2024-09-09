<?php
// Definisi class Pengguna
class Pengguna {
    // Atribut nama yang bersifat protected (dapat diakses oleh class turunannya)
    protected $nama;

    // Method untuk mengatur nilai atribut nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Method untuk mendapatkan nilai atribut nama
    public function getNama() {
        return $this->nama;
    }

    // Method untuk mengakses fitur (akan dioverride oleh class turunan)
    public function aksesFitur() {
        return $this->nama;
    }
}

// Definisi class Mahasiswa yang merupakan turunan dari class Pengguna
class Mahasiswa extends Pengguna {
    // Override method aksesFitur untuk menampilkan "Fitur Mahasiswa"
    public function aksesFitur() {
        echo "Fitur Mahasiswa";
    }
}

// Definisi class Dosen yang merupakan turunan dari class Pengguna
class Dosen extends Pengguna {
    // Override method aksesFitur untuk menampilkan "Fitur Dosen"
    public function aksesFitur() {
        echo "Fitur Dosen";
    }
}

// Membuat objek Dosen
$dosen1 = new Dosen();

// Memanggil method aksesFitur dari objek Dosen
// Output: Fitur Dosen
$dosen1->aksesFitur();
?>
