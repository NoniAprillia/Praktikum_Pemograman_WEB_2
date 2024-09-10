# JOBSHEET2

## Menggunakan Konsep Kelas dan Objek dalam PHP

<h3>MEMBUAT CLASS dan OBJECT</h3>

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

<h3>OUTPUT</h3>

![Screenshot (475)](https://github.com/user-attachments/assets/17b67509-5729-45f7-aa84-f5440a97e644)

<h3>Implementasi Constructor</h3>

```php
public function __construct($nama, $nim, $jurusan) {
```
__construct adalah metode khusus dalam PHP yang secara otomatis dipanggil saat objek dari kelas dibuat. Fungsinya adalah untuk menginisialisasi atribut objek dengan nilai yang diberikan. Ini memastikan bahwa objek selalu berada dalam keadaan yang valid dan konsisten sejak awal.

```php
($nama, $nim, $jurusan) {
```
($nama, $nim, $jurusan): Ini adalah parameter yang diterima oleh konstruktor. Parameter ini digunakan untuk menginisialisasi atribut objek saat objek dibuat. Dalam hal ini, konstruktor menerima tiga parameter: $nama, $nim, dan $jurusan.

```php
$this->nama = $nama;
$this->nim = $nim;
$this->jurusan = $jurusan;
```
- $this: $this adalah referensi ke objek saat ini. Ketika Anda berada dalam metode kelas, $this merujuk ke objek yang sedang beroperasi.
- $this->nama = $nama: Menetapkan nilai parameter $nama ke atribut objek nama. Dengan kata lain, ini menginisialisasi atribut nama dari objek dengan nilai yang diterima oleh konstruktor.
- $this->nim = $nim: Menetapkan nilai parameter $nim ke atribut objek nim. Ini menginisialisasi atribut nim dari objek dengan nilai yang diterima oleh konstruktor.
- $this->jurusan = $jurusan: Menetapkan nilai parameter $jurusan ke atribut objek jurusan. Ini menginisialisasi atribut jurusan dari objek dengan nilai yang diterima oleh konstruktor.

```php
$mahasiswa1 = new Mahasiswa("Noni Aprillia", "230102040", "Komputer dan Bisnis");
```
new Mahasiswa("Noni Aprillia", "230102040", "Komputer dan Bisnis"): Ini adalah perintah untuk membuat objek baru dari kelas Mahasiswa. Kata kunci new digunakan untuk memanggil konstruktor kelas Mahasiswa dengan parameter yang diberikan.

```php
public function __construct($nama, $nim, $jurusan) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
}
```
new Mahasiswa("Noni Aprillia", "230102040", "Komputer dan Bisnis") dipanggil, konstruktor __construct dijalankan, dan atribut nama, nim, dan jurusan dari objek $mahasiswa1 diatur sesuai dengan argumen yang diteruskan.

```php
echo $mahasiswa1->tampilkanData();
}
```
$mahasiswa1->tampilkanData(): Memanggil metode tampilkanData pada objek $mahasiswa1

<h3>OUTPUT</h3>

![Screenshot (475)](https://github.com/user-attachments/assets/17b67509-5729-45f7-aa84-f5440a97e644)


<h3>Membuat metode tambahan</h3>

```php
public
```
public: Modifikator akses ini menunjukkan bahwa metode updateJurusan dapat diakses dari luar kelas, dari objek yang dibuat dari kelas tersebut, dan dari kode lain yang menggunakan kelas ini. Tidak ada pembatasan akses pada metode ini.

```php
public function updateJurusan(){
```
function: Kata kunci untuk mendeklarasikan metode (atau fungsi) dalam PHP.
updateJurusan: Nama metode. Nama ini digunakan untuk memanggil metode ini pada objek dari kelas.

```php
    return "<br> Nama: $this->nama </br> <br> NIM: $this->nim </br> <br> Jurusan: $this->jurusan </br>";
```
return: Kata kunci return digunakan untuk mengembalikan nilai

<h3>OUTPUT</h3>

![Screenshot (476)](https://github.com/user-attachments/assets/48cf53b9-096d-4aa1-8ab8-5e8ff85f5806)

<h3>Penggunaan Atribut</h3>

```php
class Mahasiswa {
```
class Mahasiswa: Mendefinisikan sebuah kelas baru dengan nama Mahasiswa. Kelas ini menjadi blueprint atau cetak biru untuk membuat objek-objek yang merepresentasikan data mahasiswa.

```php
public $nama;
    public $nim;
    public $jurusan;
```
private $nama, private $nim, private $jurusan: Atribut-atribut ini memiliki visibilitas private. Artinya, atribut ini hanya dapat diakses dari dalam kelas Mahasiswa itu sendiri.

```php
public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
```
__construct(): Metode khusus yang secara otomatis dipanggil ketika objek Mahasiswa baru dibuat. Parameter: $nama: Nilai yang akan diberikan kepada atribut $nama. $nim: Nilai yang akan diberikan kepada atribut $nim. $jurusan: Nilai yang akan diberikan kepada atribut $jurusan. Function: Menginisialisasi objek Mahasiswa dengan nilai-nilai yang diberikan saat objek dibuat.

```php
public function setNim($nim) {
        $this->nim = $nim;
```
setNim($nim) Untuk mengubah nilai dari atribut yang ada atau metode yang digunakan untuk memperbarui nilai atribut objek. Ini sangat berguna dalam enkapsulasi untuk memastikan bahwa atribut objek hanya dapat diubah melalui metode yang disediakan oleh kelas.

```php
$mahasiswa1 = new Mahasiswa("Noni Aprillia", "230102040", "Kombis");
```
$mahasiswa1: Variabel yang menyimpan referensi ke objek Mahasiswa yang baru dibuat.
new Mahasiswa("Noni Aprillia", "230102040", "Kombis"): Perintah ini membuat sebuah objek baru dari kelas Mahasiswa dengan menggunakan konstruktor __construct.
"Noni Aprillia": Nilai untuk atribut nama.
"230102040": Nilai untuk atribut nim.
"Kombis": Nilai untuk atribut jurusan.

```php
echo "Data Awal: ";
echo $mahasiswa1->tampilkanData();
```
- echo "Data Awal: ": Menampilkan teks "Data Awal: " di output untuk memberi konteks bahwa data yang ditampilkan berikutnya adalah data awal objek.
- $mahasiswa1->tampilkanData(): Memanggil metode tampilkanData pada objek
- $mahasiswa1 yang mengembalikan string HTML dengan informasi tentang mahasiswa. Outputnya akan mencakup nama, NIM, dan jurusan yang telah diatur saat instansiasi objek.

```php
$mahasiswa1->setNim("230102041");
```
Mengupdate Nilai NPM
- $mahasiswa1->setNim("230102041"): Memanggil metode setNim pada objek $mahasiswa1. Metode ini mengubah nilai atribut nim dari objek tersebut menjadi "230102041".

```php
echo "Data Setelah Pembaruan: ";
echo $mahasiswa1->tampilkanData();
```
$mahasiswa1->tampilkanData(): Memanggil kembali metode tampilkanData pada objek $mahasiswa1. Kali ini, output yang dihasilkan akan menunjukkan bahwa nilai nim telah diperbarui sesuai dengan nilai baru yang diatur sebelumnya.

<h3>OUTPUT</h3>
