# JOBSHEET2

## Menggunakan Konsep Kelas dan Objek dalam PHP

<h3>CLASS dan OBJECT</h3>

- CLASS
```php
class Mahasiswa {
```
Class adalah Struktur atau blueprint yang mendefinisikan atribut dan metode yang dimiliki oleh objek. Class mendefinisikan struktur dan perilaku objek melalui atribut dan metode. Dengan kata lain, kelas adalah kumpulan data dan fungsi yang relevan yang dikelompokkan dalam satu unit

```php
public $nama;
    public $nim;
    public $jurusan;
```
Atribut adalah elemen penting yang digunakan untuk menyimpan data dalam sebuah objek. Atribut sering kali disebut juga sebagai properti atau variabel anggota. Mereka mendefinisikan keadaan atau informasi yang dimiliki oleh objek.

```php
class Mahasiswa {
public $nama;
private $nama2;
protected $nama3;
```
Atribut tidak hanya memiliki 1 aksesbiliti tetapi ada 3, yaitu :

- Public : Digunakan ketika kita ingin atribut atau metode dapat diakses tanpa batasan. Biasanya digunakan untuk metode yang perlu diakses oleh pengguna kelas atau untuk data yang memang perlu diakses secara luas.
- Private : Digunakan ketika kita ingin melindungi data atau metode dari akses langsung dari luar kelas. Biasanya digunakan untuk data internal yang tidak seharusnya dimodifikasi secara langsung dari luar kelas.
- Protected : Digunakan ketika kita ingin memberikan akses kepada kelas turunan tetapi tetap menjaga data atau metode dari akses langsung oleh kode di luar kelas atau objek.

```php
public function tampilkanData(){
        return " <br> Nama : $this->nama </br> <br> NIM : $this->nim </br> <br> Jurusan : $this->jurusan </br>";
```
Metode tampilkanData() bertujuan untuk mengembalikan informasi yang diformat tentang objek dalam bentuk string HTML. Biasanya, metode ini digunakan untuk menampilkan data dari objek dengan cara yang terformat dengan baik

```php
//INSTANSIASI OBJEK
    $Mahasiswa1 = new Mahasiswa();
```
$Mahasiswa1 : Ini adalah variabel yang menyimpan referensi ke objek yang baru dibuat dari kelas Mahasiswa.

new Mahasiswa(): Kata kunci new digunakan untuk membuat objek baru dari kelas Mahasiswa. Proses ini disebut instansiasi. Dengan perintah ini, PHP memanggil konstruktor kelas Mahasiswa (jika ada) dan mengalokasikan memori untuk objek baru tersebut.

```php
    $Mahasiswa1->nama="Noni Aprillia";
    $Mahasiswa1->nim="230102040";
    $Mahasiswa1->jurusan="Komputer dan Bisnis";
```
Atribut-atribut ini sebelumnya telah dideklarasikan dalam kelas Mahasiswa sebagai public, sehingga dapat diakses dan dimodifikasi dari luar kelas.

```php
    echo $Mahasiswa1->tampilkanData();
```
$Mahasiswa1->tampilkanData(): Memanggil metode tampilkanData pada objek $Mahasiswa1. Metode ini mengembalikan sebuah string yang memformat data atribut objek menjadi HTML.

echo : Menampilkan hasil yang dikembalikan oleh metode tampilkanData ke output

<h3>OUTPUT CLASS DAN OBJECT</h3>
