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

- SUB CLASS
```php
class Student extends Person {
```
Student adalah subclass dari Person. Ini berarti bahwa kelas Student akan mewarisi semua atribut dan metode yang didefinisikan dalam kelas Person

```php
private $studentID;
```
private $studentID; mendeklarasikan atribut bernama $studentID dengan visibilitas private.

```php
public function __construct($name, $studentID){
```
konstruktor kelas Student yang memanggil konstruktor dari kelas induk dan kemudian menginisialisasi atribut khusus kelas Student.

```php
parent::__construct($name);
```
memastikan bahwa atribut yang diwarisi (dalam hal ini, name) diinisialisasi dengan benar.

```php
$this->studentID=$studentID;
```
$studentID mengatur nilai untuk atribut studentID dalam kelas Student.

```php
$Person1 = new Student ("Noni Aprillia", " 230102040 " );
```
memanggil konstruktor __construct dari kelas Student. Konstruktor ini menginisialisasi atribut name dan studentID dengan nilai 

```php
echo $Person1->getName() . '<br>';
```
getName() adalah metode publik di kelas Person yang mengembalikan nilai dari atribut name. Metode ini diakses dari objek $Person1.

```php
echo $Person1->getstudentID() . '<br>';
```
mencetak nilai dari atribut studentID, yaitu "230102040"

<h3>OUTPUT</h3>

![Screenshot (482)](https://github.com/user-attachments/assets/883aedf4-fdeb-4ffa-a166-8261fa99de95)

## POLYMORPHISM

- CLASS

```php
class Person {
```
Definisi kelas Person. Kelas adalah cetak biru untuk objek, yang menentukan atribut (variabel) dan metode (fungsi) yang akan dimiliki oleh objek yang dibuat dari kelas ini.

```php
    public $name; 
    public function __construct($name) {
```
public menunjukkan bahwa atribut $name dapat diakses dari mana saja, baik dari dalam kelas Person

```php
$this->name = $name;
```
Baris ini menginisialisasi atribut $name dengan nilai yang diterima dari parameter $name. $this merujuk pada objek saat ini yang sedang diinisialisasi.

- METODE

```php
public function getName() {
        return $this->name;
```
getName biasanya digunakan untuk mengakses atau mengambil nilai dari atribut yang mungkin bersifat privat atau protected.

```php
public function setName($name) {
```
setName adalah nama metode ini. Dalam konvensi OOP, metode yang diawali dengan set biasanya digunakan untuk menetapkan atau mengubah nilai dari atribut objek. 

```php
$this->name = $name;
```
Baris ini menetapkan nilai parameter $name ke atribut name dari objek. Dengan kata lain, ini mengubah nilai atribut name sesuai dengan nilai yang diterima dari parameter.

- SUB CLASS

```php
class Student extends Person {
    private $studentID;
```
class Student: Ini mendefinisikan kelas Student.
extends Person: Kata kunci extends menunjukkan bahwa Student adalah subclass (kelas turunan) dari kelas Person

```php
class Teacher extends Person {
    private $teacherID;
```
class Teacher: Mendefinisikan kelas Teacher. Kelas ini merupakan subclass (kelas turunan) dari kelas Person.
extends Person: Kata kunci extends menunjukkan bahwa Teacher adalah subclass dari Person, yang berarti Teacher mewarisi atribut dan metode dari Person.

```php
$student = new Student("Alva Rezal", "230102039");
$teacher = new Teacher("Meilita Ayu", "230102038");
$student = new Student("Probo Widado", "230102041");
```
Membuat Object

```php
echo $student->getName() . " with Student ID " . $student->getStudentID() . "<br>";
echo $teacher->getName() . " with Teacher ID " . $teacher->getTeacherID() . "<br>";
echo $student->getName() . " with Teacher ID " . $teacher->getTeacherID() . "<br>";
```
Menampilkan object

<h3>OUTPUT</h3>

![Screenshot (483)](https://github.com/user-attachments/assets/04b17255-4e55-4a53-b542-358d67bc75cf)
 
## ENCUPSULATION

- CLASS
```php
class  Person {
```
Definisi kelas Person. Kelas adalah cetak biru untuk objek, yang menentukan atribut (variabel) dan metode (fungsi) yang akan dimiliki oleh objek yang dibuat dari kelas ini.

- ATRIBUT
```php
protected $name;
```
protected adalah salah satu tingkat aksesibilitas dalam OOP. Atribut atau metode yang dideklarasikan sebagai protected dapat diakses:
Dari dalam kelas itu sendiri.
Dari kelas turunan (subclass) yang mewarisi kelas tersebut.

- METODE

```php
public function getName() {
```
metode publik yang mengembalikan nilai dari atribut name yang ada pada objek.

```php
    return $this->name;
```
mengakses nilai atribut name dan mengembalikannya kepada kode pemanggil.

```php
public function setName($name) {
```
Ini adalah deklarasi metode bernama setName yang menerima satu parameter $name

```php
$this->name = $name;
```
Mengacu pada atribut name dari objek saat ini. Atribut ini menyimpan nilai yang akan diatur atau diubah oleh metode setter.

```php
$student = new Student("Noni Aprillia", "230102040");
echo $student->getName() . " has Student ID " . $student->getStudentID() . "<br>";
$student->setName("Katrina Dewi");
$student->setStudentID("230302010");
echo $student->getName() . " has Student ID " . $student->getStudentID();
```
Membuat objek Student baru dengan nama "Noni Aprillia" dan ID mahasiswa "230102040". Ini memanggil konstruktor Student, yang pada gilirannya memanggil konstruktor dari kelas induk Person untuk mengatur nama dan menginisialisasi ID mahasiswa di kelas Student.
