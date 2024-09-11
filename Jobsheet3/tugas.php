<?php
// Kelas Person
abstract class Person {
    // Atribut
    private $name;
    
    // Konstruktor
    public function __construct($name) {
        $this->name = $name;
    }
    
    // Getter dan Setter
    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    // Metode Abstrak
    abstract public function getRole();
}

// Kelas Dosen
class Dosen extends Person {
    // Atribut
    private $nidn;

    // Konstruktor
    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }
    
    // Getter dan Setter untuk NIDN
    public function getNidn() {
        return $this->nidn;
    }
    
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    // Implementasi metode getRole()
    public function getRole() {
        return "Dosen";
    }
}

// Kelas Mahasiswa
class Mahasiswa extends Person {
    // Atribut
    private $nim;

    // Konstruktor
    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }
    
    // Getter dan Setter untuk NIM
    public function getNim() {
        return $this->nim;
    }
    
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Implementasi metode getRole()
    public function getRole() {
        return "Mahasiswa";
    }
}

// Kelas Abstrak Jurnal
abstract class Jurnal {
    // Metode Abstrak
    abstract public function manageSubmission();
}

// Kelas JurnalDosen
class JurnalDosen extends Jurnal {
    public function manageSubmission() {
        return "Jurnal Dosen untuk saat ini sedang diproses.";
    }
}

// Kelas JurnalMahasiswa
class JurnalMahasiswa extends Jurnal {
    public function manageSubmission() {
        return "Jurnal Mahasiswa untuk saat ini sedang diproses.";
    }
}

// Menggunakan kelas Dosen dan Mahasiswa
$dosen = new Dosen("Bapak Lutfhi Syafirullah", "0621118402");
$mahasiswa = new Mahasiswa("Noni Aprillia", "230102040");

// Menampilkan informasi
echo "Data Dosen:<br>";
echo "Nama: " . $dosen->getName() . "<br>";
echo "NIDN: " . $dosen->getNidn() . "<br>";
echo "Role: " . $dosen->getRole() . "<br><br>";

echo "Data Mahasiswa:<br>";
echo "Nama: " . $mahasiswa->getName() . "<br>";
echo "NIM: " . $mahasiswa->getNim() . "<br>";
echo "Role: " . $mahasiswa->getRole() . "<br><br>";

// Menggunakan kelas Jurnal
$jurnalDosen = new JurnalDosen();
$jurnalMahasiswa = new JurnalMahasiswa();

echo $jurnalDosen->manageSubmission() . "<br>";
echo $jurnalMahasiswa->manageSubmission() . "<br>";
?>
