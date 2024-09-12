<?php
// Definisi class Pengguna dengan atribut nama
class Pengguna {
    // Atribut nama yang bersifat protected (dapat diakses oleh class turunannya)
    public $nama;

    // Method getter untuk mendapatkan nama
    public function getNama() {
        return $this->nama;
    }
}

// Definisi class Dosen yang merupakan turunan dari class Pengguna
class Dosen extends Pengguna {
    // Atribut mataKuliah yang bersifat private
    public $mataKuliah;

    // Method getter untuk mendapatkan mataKuliah
    public function tampilData() {
    echo $this->getNama();
    echo $this->mataKuliah;
    }
}

$Pengguna1 = new Dosen();

$Pengguna1->nama="Abda`u <br>";
$Pengguna1->mataKuliah="Pemograman PWEB";

echo $Pengguna1->tampilData();
?>
