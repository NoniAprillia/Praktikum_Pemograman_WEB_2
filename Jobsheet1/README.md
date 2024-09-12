## JOBSHEET - 1

<h2>Mendefinisikan Kelas dan Objek</h2>

<b>Kelas(Class)</b>
```php
class Mahasiswa
```
Class dapat didefinisikan seperti template untuk menciptakan objek yang mencangkup atribut dan juga metode yang dimiliki oleh objek atau seolah olah class itu adalah bahan mentah yang akan kita olah menjadi suatu object

<b>Objek(Object)</b>
```php
$Mahasiswa1 = new Mahasiswa;
```
Instansiasi dari class yang memiliki atribut (properties) dan perilaku(methods), Instansiasi menciptakan class baru untuk menyimpan data atau perumpaan yang kita bayangkan seperti object ini bahan yang sudah jadi dari kelas  

<b>Atribut</b>
```php
    public $nama;
    public $nim;
    public $jurusan;
```
variabel di dalam class yang menyimpan data atau keadaan dari objek, di dalam atribut memiliki aksesbilitasi :  

- Public: Dapat diakses dari mana saja.
- Private: Hanya dapat diakses dalam kelas itu sendiri.
- Protected: Dapat diakses oleh kelas itu sendiri dan kelas turunan.

dari ketiga ini bisa di sesuaikan sesuai dengan kebutuhan dan kondisi nya masing-masing

<b>Method</br>
```php
public function tampilkanData() {
return " <br> Nama : $this->nama </br> <br> NIM : $this->nim </br> <br> Jurusan : $this->jurusan.</br>";
```
Method atau metode di dalam kelas digunakan untuk melakukan operasi data dari objek

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

Dalam Class Mahasiswa memiliki Atribut Privat:

- private $nama;: Variabel untuk menyimpan nama mahasiswa. Kata kunci private berarti atribut ini hanya bisa diakses dari dalam kelas Mahasiswa, tidak dapat diakses langsung dari luar kelas.
- private $nim;: Variabel untuk menyimpan Nomor Induk Mahasiswa (NIM). Sama seperti nama, akses ke nim dibatasi hanya untuk metode di dalam kelas.
- private $jurusan;: Variabel untuk menyimpan jurusan mahasiswa. Juga menggunakan akses private.

Metode dalam OOP : 

- GETTER

Getter adalah metode yang digunakan untuk mengambil atau membaca nilai atribut dari luar kelas. Metode ini umumnya diberi nama dengan awalan get diikuti dengan nama atributnya.
```php
public function getNama() { 
        return $this->nama;
    }

    public function getNim() {
        return $this->nim;
    }

    public function getJurusan() {
        return $this->jurusan;   
    }
```
- SETTER

Setter adalah metode yang digunakan untuk mengubah atau menetapkan nilai atribut dari luar kelas. Metode ini umumnya diberi nama dengan awalan set diikuti dengan nama atributnya.

```php    
    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}
```

```php
$Mahasiswa1 = new Mahasiswa();

$Mahasiswa1->setNama("Aprillia");
$Mahasiswa1->setNim("230104020");
$Mahasiswa1->setJurusan("KOMBIS");

// Menggunakan metode getter untuk menampilkan informasi mahasiswa
echo "Nama: " . $Mahasiswa1->getNama() . '<br>';
echo "NIM: " . $Mahasiswa1->getNim() . '<br>';
echo "Jurusan: " . $Mahasiswa1->getJurusan() . '<br><br>';
```
Menampilkan output nya 

<h3>OUTPUT ENCUPSULATION</h3>

![Screenshot (489)](https://github.com/user-attachments/assets/23de31ec-3102-4f8f-8418-221773248ead)

<h3>2. Inheritance</h3>

Definisi : Pewarisan adalah mekanisme di mana sebuah kelas baru (subkelas atau kelas turunan) dapat mewarisi atribut dan metode dari kelas yang sudah ada 

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
Protected adalah atribut yang hanya bisa diakses di dalam kelas itu sendiri dan kelas-kelas yang mewarisi kelas ini (subkelas), tetapi tidak bisa diakses dari luar kelas secara langsung.

```php
class Dosen extends Pengguna {
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
extends adalah kata kunci yang digunakan untuk mendefinisikan pewarisan kelas, extends seperti memanggil induk atau ibu nya

```php
echo $Pengguna1->getNama() . '<br>';
echo $Pengguna1->getMatakuliah() . '<br>'; // Output: Pemrograman Web 2
?>
```
getNama() adalah metode yang didefinisikan di kelas Pengguna. Karena $Pengguna1 adalah objek Dosen yang mewarisi dari Pengguna,

<h3>OUTPUT INHERITANCE</h3>

![Screenshot (490)](https://github.com/user-attachments/assets/d8459bc4-f32b-43b0-81eb-8ec52ac7c580)

<h3> 3. Polymorphism </h3>

Definisi: Polimorfisme memungkinkan objek dari berbagai kelas untuk diperlakukan sebagai objek dari kelas yang sama melalui antarmuka yang sama. Ada dua jenis polimorfisme: polimorfisme compile-time (method overloading) dan polimorfisme runtime (method overriding).

Manfaat: Mempermudah penggunaan objek dari berbagai kelas dengan cara yang konsisten dan memungkinkan implementasi metode yang berbeda tergantung pada jenis objek.

```php
<?php
class Pengguna {
    protected $nama;

    public function setNama($nama) {
        $this->nama = $nama;
    }
```
- Protected Attribute: Atribut protected $nama hanya bisa diakses di dalam kelas Pengguna dan subkelas yang mewarisi Pengguna.
- Public Method setNama(): Metode ini mengatur nilai dari atribut $nama.
- Menambahkan Metode getNama(): Untuk mendapatkan nilai atribut $nama, kamu perlu menambahkan metode getNama().

```php
    class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        echo "Fitur Mahasiswa";
    }
}

class Dosen extends Pengguna {
    public function aksesFitur() {
        echo "Fitur Dosen";
    }
}
```
- Method Overriding: Mahasiswa dan Dosen mengubah implementasi dari metode aksesFitur() yang diwarisi dari Pengguna.
- Polimorfisme: Jika kita memiliki variabel bertipe Pengguna yang menunjuk ke objek Mahasiswa atau Dosen, metode aksesFitur() yang dipanggil adalah versi yang di-override oleh kelas tersebut.

<h3>OUTPUT POLYMORPHISM</h3>

![Screenshot (471)](https://github.com/user-attachments/assets/597ba6f0-defb-46eb-b67c-bbf4e4f693e4)

<h3> 4. Abstraction</h3>

Definisi: Abstraksi adalah proses menyembunyikan detail implementasi yang kompleks dan hanya menampilkan fungsionalitas yang relevan kepada pengguna. Dalam OOP, abstraksi dicapai melalui penggunaan kelas dan antarmuka yang menyembunyikan detail yang tidak perlu.

Manfaat: Memudahkan pengembangan dan pemeliharaan kode dengan menyediakan pandangan yang lebih sederhana dan lebih jelas dari sistem yang kompleks.

```php
<?php
abstract class Pengguna {
    protected $nama;
    public function __construct($nama) {
        $this->nama = $nama;
    }
```
- Kata kunci abstract mendefinisikan Pengguna sebagai kelas abstrak. Kelas abstrak adalah kelas yang tidak dapat diinstansiasi secara langsung. Artinya, kamu tidak dapat membuat objek langsung dari kelas ini.
- Tujuan dari kelas abstrak adalah untuk menyediakan blueprint (kerangka) untuk kelas turunan yang akan mewarisinya. Kelas turunan harus mengimplementasikan metode abstrak yang didefinisikan dalam kelas abstrak.

```php
class Dosen extends Pengguna {
    public function aksesFitur() {
        echo $this->getNama() . "Akses Fitur Dosen.<br>";
    }
}
```
- extends digunakan untuk menunjukkan bahwa kelas Dosen adalah turunan dari kelas Pengguna. Ini berarti Dosen mewarisi atribut dan metode dari Pengguna.

<h3>OUTPUT ABSTRACTION</h3>

![Screenshot (472)](https://github.com/user-attachments/assets/c1c6c02d-b044-446c-b2a6-3c08cfba4091)
