<h1>JOBSHEET3</h1>

<h2>Menerapkan Konsep Inheritance, Polymorphism, Encapsulation,dan Abstraction dalam PHP</h2>

## INHERITANCE

- CLASS
```php
class Person {
```
Kelas Person digunakan untuk membuat objek yang mewakili seseorang dengan informasi dasar 

- ATRIBUT
```php
protected $name;
```
protected adalah salah satu dari tiga visibilitas akses untuk atribut dan metode dalam kelas, bersama dengan public dan private. Ketika Anda mendeklarasikan atribut atau metode dengan kata kunci protected, itu mempengaruhi cara akses ke atribut atau metode tersebut oleh kelas dan objek lainnya.

- CONSTRUCT
```php
public function __construct($name) {
        $this->name=$name;
```
konstruktor public dapat digunakan untuk menginisialisasi objek dari luar kelas.

- METODE
```php
public
```
public tidak memiliki batasan akses, sehingga pengguna atau bagian lain dari aplikasi dapat memanggil metode ini untuk mendapatkan informasi

```php
public function getName(){
```
metode yang dimulai dengan get sering digunakan untuk mengakses atau mengambil nilai dari atribut yang bersifat privat atau protected

```php
return $this->name;
```
return: Keyword return mengembalikan nilai dari metode. Dalam hal ini, nilai yang dikembalikan adalah nilai dari atribut name.

$this->name: Mengacu pada atribut name dari objek saat ini. Atribut ini menyimpan nilai yang diinginkan oleh metode getName()
