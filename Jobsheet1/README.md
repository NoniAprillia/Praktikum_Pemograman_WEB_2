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

<h2>Mendefinisikan Kelas dan Objek</h2>
<b>Kelas(Class)</b>

```php
class Mahasiswa
```

- Template untuk menciptakan objek yang mencangkup atribut dan juga metode yang dimiliki oleh objek
- Membuat definisi class yang akan menampung atribut dan juga metode

<b>Objek(Object)</b>

```php
$Mahasiswa1 = new Mahasiswa;
```

- Instance dari class yang memiliki atribut (properties) dan perilaku(methods)
- Instansiasi menciptakan class baru untuk menyimpan data 

<b>Atribut</b>

```php
    public $nama;
    public $nim;
    public $jurusan;
```

Untuk variabel di dalam class untuk menyimpan data atau keadaan dari objek, aksesbilitasi ada 3 :  

- Public: Dapat diakses dari mana saja.
- Private: Hanya dapat diakses dalam kelas itu sendiri.
- Protected: Dapat diakses oleh kelas itu sendiri dan kelas turunan.

<b>Method</br>
```php
    public function tampilkanData() {
        return " <br> Nama : $this->nama </br> <br> NIM : $this->nim </br> <br> Jurusan : $this->jurusan.</br>";
```

- Method atau metode di dalam kelas digunakan untuk melakukan operasi data dari objek

<h2>Prinsip OOP</h2>

<h3>1. Encapsulation</h3>

- Definisi:
Enkapsulasi adalah prinsip yang membungkus data (atribut) dan metode (fungsi) yang beroperasi pada data tersebut dalam satu unit, yaitu objek. Ini menyembunyikan detail implementasi internal dari objek dan hanya menyediakan antarmuka publik untuk interaksi.

- Tujuan: Mencegah akses langsung ke data penting dan mencegah modifikasi yang tidak diinginkan dari luar objek, meningkatkan keamanan dan integritas data.

```php
<?php

class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;
```
Kelas Mahasiswa: Ini adalah definisi dari sebuah kelas yang bernama Mahasiswa. Kelas adalah blueprint atau template untuk membuat objek.

Atribut Privat:

- private $nama;: Variabel untuk menyimpan nama mahasiswa. Kata kunci private berarti atribut ini hanya bisa diakses dari dalam kelas Mahasiswa, tidak dapat diakses langsung dari luar kelas.
- private $nim;: Variabel untuk menyimpan Nomor Induk Mahasiswa (NIM). Sama seperti nama, akses ke nim dibatasi hanya untuk metode di dalam kelas.
- private $jurusan;: Variabel untuk menyimpan jurusan mahasiswa. Juga menggunakan akses private.

```php
public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
```
$this->nama = $nama;:

$this: Merujuk pada instance saat ini dari kelas Mahasiswa.
$this->nama: Mengacu pada atribut nama dalam kelas.

Metode dalam OOP ada 2, yaitu : 

- GETTER

Getter adalah metode yang digunakan untuk mengambil atau membaca nilai atribut dari luar kelas. Metode ini umumnya diberi nama dengan awalan get diikuti dengan nama atributnya.
```php
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
```
- SETTER

Setter adalah metode yang digunakan untuk mengubah atau menetapkan nilai atribut dari luar kelas. Metode ini umumnya diberi nama dengan awalan set diikuti dengan nama atributnya.

```php    
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
```

<h3>OUTPUT ENCUPSULATION</h3>
>>>

<h3>2. Inheritance</h3>

Definisi : Pewarisan adalah mekanisme di mana sebuah kelas baru (subkelas atau kelas turunan) dapat mewarisi atribut dan metode dari kelas yang sudah ada (superkelas atau kelas dasar). Ini memungkinkan penggunaan kembali kode yang sudah ada dan memperluas fungsionalitas tanpa harus menulis ulang kode.

Manfaat : Memudahkan pengorganisasian kode dan memungkinkan pengembangan yang lebih efisien dengan mendefinisikan kelas yang lebih umum dan kelas yang lebih spesifik.

```php
<?php
class Pengguna {
    protected $nama;
    public function __construct($nama) {
        $this->nama = $nama;
    }
    public function getNama() {
        return $this->nama;
    }
}
```
Protected : Artinya, atribut ini hanya bisa diakses di dalam kelas itu sendiri dan kelas-kelas yang mewarisi kelas ini (subkelas), tetapi tidak bisa diakses dari luar kelas secara langsung.

```php
class Dosen extends Pengguna {
    // Atribut mataKuliah yang bersifat private
    private $mataKuliah;
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
    public function getMatakuliah() {
        return $this->mataKuliah;
    }
}
```
extends adalah kata kunci yang digunakan untuk mendefinisikan pewarisan kelas

```php
echo $Pengguna1->getNama() . '<br>';
echo $Pengguna1->getMatakuliah() . '<br>'; // Output: Pemrograman Web 2
?>
```
getNama() adalah metode yang didefinisikan di kelas Pengguna. Karena $Pengguna1 adalah objek Dosen yang mewarisi dari Pengguna,

<h3> 3. Polymorphism </h3>
Untuk Metode yang sama dapat memiliki implementasi berbeda
dalam class yang berbeda.

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
```

```php
    // Method untuk mendapatkan nilai atribut nama
    public function getNama() {
        return $this->nama;
    }

    // Method untuk mengakses fitur (akan dioverride oleh class turunan)
    public function aksesFitur() {
        return $this->nama;
    }
}
```

<h3> 4. Abstraction</h3>
Untuk Menyembunyikan detail implementasi dan hanya menampilkan
fungsi penting.

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
```
