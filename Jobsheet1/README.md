<h1>Object-Oriented Programming</h1>

## Pendahuluan
Pemrograman Berorientasi Objek atau yang biasa disebut dengan OOP adalah suatu metode pemrograman yang berorientasi pada objek. 
Program-program yang telah ada merupakan gabungan dari beberapa komponen-komponen kecil yang sudah ada sebelumnya.

Pemrograman berorientasi objek memiliki beberapa keunggulan dibandingkan pemrograman prosedural:
- OOP lebih cepat dan mudah dijalankan
- OOP menyediakan struktur yang jelas untuk program
- OOP membantu menjaga kode PHP tetap DRY "Jangan Ulangi Diri Anda Sendiri", dan membuat kode lebih mudah untuk dipelihara, dimodifikasi, dan di-debug
- OOP memungkinkan pembuatan aplikasi yang dapat digunakan kembali sepenuhnya dengan kode yang lebih sedikit dan waktu pengembangan yang lebih singkat

Tujuan utama OOP adalah untuk mengatasi kelemahan pendekatan pemrograman konvensional.

<h1>JOBSHEET - 1</h1>

<h2>Kelas dan Objek</h2>
<b>Kelas (Class)</b>

```php
class Mahasiswa
```
Class : Blueprint atau template untuk menciptakan objek yang mencangkup atribut dan juga metode yang dimiliki oleh objek

<b>Objek(Object)</b>
```php
$Mahasiswa1 = new Mahasiswa;
```
Objek : Instance dari class yang memiliki atribut (properties) dan perilaku
(methods)

<b>Atribut</b>
```php
    public $nama;
    public $nim;
    public $jurusan;
```
Atribut : variabel di dalam class untuk menyimpan data atau keadaan dari objek, ada pula jenis-jenis atribut : 

- PUBLIC
- PRIVATE
- PROTECTED

<b>Method</br>
```php
    public function tampilkanData() {
        return " <br> Nama : $this->nama </br> <br> NIM : $this->nim </br> <br> Jurusan : $this->jurusan.</br>";
```
Method atau metode di dalam kelas digunakan untuk melakukan operasi data dari objek

<h2>Prinsip OOP</h2>

1. Encapsulation: Menyembunyikan detail implementasi dan hanya memberikan
akses melalui metode tertentu.

Contoh :
```php
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
```

- Inheritance: Kelas dapat mewarisi properti dan metode dari kelas lain.

Contoh:
```php
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
```

- Polymorphism: Metode yang sama dapat memiliki implementasi berbeda
dalam class yang berbeda.

Contoh: 
```php
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
```

- Abstraction: Menyembunyikan detail implementasi dan hanya menampilkan
fungsi penting.

Contoh : 
```php
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
```
