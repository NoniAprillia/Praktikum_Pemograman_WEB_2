<h1>JOBSHEET3</h1>

<h2>Menerapkan Konsep Inheritance, Polymorphism, Encapsulation,dan Abstraction dalam PHP</h2>

## INHERITANCE
Inheritance yaitu pewarisan atau turunan properti dari kelas lain, pada inheritance biasanya miliki induk dan anak induk 

- CLASS
```php
class Person {
protected $name;
```
Membuat kelas person yang memiliki atribut nama dengan aksesbiliti protected yang bisa di implementasikan oleh turunan nya 

- CONSTRUCT
```php
public function __construct($name) {
        $this->name=$name;
```
konstruktor public dapat digunakan untuk menginisialisasi objek dari luar kelas.

- METODE
```php
public function getName(){
```
metode yang dimulai dengan get sering digunakan untuk mengambil nilai dari atribut 

```php
return $this->name;
```
return untuk mengembalikan nilai dari metode. Dalam hal ini, nilai yang dikembalikan adalah nilai dari atribut name.

$this->name: Mengacu pada atribut name dari objek saat ini. Atribut ini menyimpan nilai yang diinginkan oleh metode getName()

- SUB CLASS
```php
class Student extends Person {
```
Student adalah subclass dari Person. Ini berarti kelas Student akan mewarisi semua atribut dan metode yang didefinisikan dalam kelas Person

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
memastikan atribut diinisialisasi dengan benar.

```php
$this->studentID=$studentID;
```
$studentID mengatur nilai untuk atribut studentID dalam kelas Student.

```php
$Person1 = new Student ("Noni Aprillia", " 230102040 " );
echo $Person1->getName() . '<br>';
```
getName() adalah metode publik di kelas Person yang mengembalikan nilai dari atribut name. 

```php
echo $Person1->getstudentID() . '<br>';
```
menampilkan nilai dari atribut studentID, yaitu "230102040"

<h3>OUTPUT</h3>

![Screenshot (482)](https://github.com/user-attachments/assets/883aedf4-fdeb-4ffa-a166-8261fa99de95)

## POLYMORPHISM
Polymorphism itu metode metode nya sama tapi tidak dengan implementasian nya karena pada polymorphism implementasi nya akan berbeda dengan metode yang digunakan 

- CLASS

```php
class Person {
```
Kelas adalah cetak biru untuk objek, yang menentukan atribut (variabel) dan metode (fungsi) yang akan dimiliki oleh objek

```php
    public $name; 
    public function __construct($name) {
```
public menunjukkan bahwa atribut $name dapat diakses dari mana saja, baik dari dalam kelas Person

```php
$this->name = $name;
```
atribut $name dengan nilai yang diterima dari parameter $name. $this merujuk pada objek saat ini yang sedang di kerjakan saat ini

- METODE

```php
public function getName() {
        return $this->name;
```
getName biasanya digunakan untuk mengakses dan juga mengambil nilai dari atribut yang mungkin bersifat privat atau protected.

```php
public function setName($name) {
```
setName adalah nama metode ini. Dalam konvensi OOP, metode yang diawali dengan set biasanya digunakan untuk menetapkan atau mengubah nilai dari atribut objek. 

```php
$this->name = $name;
```
menetapkan nilai parameter $name ke atribut name dari objek

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
Menyembunyikan detail dan hanya dapat di akses oleh metode tertentu saja, encupsulation biasanya menggunakan aksesbiliti private untuk menjaga ke amanan dan privasi dari kelas nya

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

<h3>OUTPUT</h3>

![Screenshot (484)](https://github.com/user-attachments/assets/501239fb-2397-4aff-850a-52753c0a13ee)

<h3>ABSTRACTION</h3>
Detail nya juga tersembunyi tetapi abstract menampilkan fungsi penting saja, Abstract memiliki metode yang akan di turun kan ke pewaris atau anak class nya lalu setelah itu anak kelas nya melakukan modifikasi sesuai dengan apa yang di butuhkan 

- CLASS
```php
abstract class Course {
abstract public function getCourseDetails();
```
abstract class Course: Ini mendeklarasikan kelas Course sebagai kelas abstrak. Kelas abstrak adalah kelas yang tidak dapat diinstansiasi secara langsung; yaitu, Anda tidak dapat membuat objek dari kelas ini secara langsung. Kelas ini biasanya berisi metode-metode yang harus diimplementasikan oleh kelas-kelas yang mewarisinya.

abstract public function getCourseDetails();: Ini mendeklarasikan metode abstrak getCourseDetails. Metode ini tidak memiliki implementasi di dalam kelas Course, dan setiap kelas yang mewarisi Course harus menyediakan implementasi konkret untuk metode ini.

- SUB CLASS ONLINE COURSE
subkelas adalah jenis khusus dari kelas yang lebih umum. Subkelas mewarisi sifat dari kelas induknya, tetapi juga bisa menambahkan sifat-sifat atau perilaku khusus yang membedakannya.

```php
class OnlineCourse extends Course {
```
deklarasi kelas baru bernama OnlineCourse.
extends menunjukkan bahwa kelas OnlineCourse adalah subclass dari kelas Course. Artinya, OnlineCourse mewarisi atribut dan metode dari kelas Course, termasuk metode abstrak yang harus diimplementasikan.

```php
    private $title;
    private $duration;
    private $platform;
```
pada class onlinecourse memiliki atribut title, durasi, dan platform yang di gunakan 

- SUB CLASS OFFLINE COURSE

```php
class OfflineCourse extends Course {
```
deklarasi kelas baru bernama OfflineCourse.

- Atribut 
```php
    private $title;
    private $duration;
    private $location;
```

- METODE
```php
  public function getCourseDetails() {
        return "Offline Course: {$this->title}, Duration: {$this->duration}, Location: {$this->location}";
```
deklarasi metode dengan nama getCourseDetails. Metode ini tidak menerima parameter.

```php
$onlineCourse = new OnlineCourse("Teori Rekayara Perangkat Lunak", "1 weeks", "Zoom");
```
Membuat objek baru dari kelas OnlineCourse.

```php
echo $onlineCourse->getCourseDetails() . "<br>";
```
memanggil metode getCourseDetails() pada objek $onlineCourse untuk mendapatkan detail kursus.

```php
$offlineCourse = new OfflineCourse("Praktikum RPL", "5 days", "Cilacap");
```
Membuat objek baru dari kelas OfflineCourse.

```php
echo $offlineCourse->getCourseDetails();
```
Memanggil metode getCourseDetails() pada objek $offlineCourse untuk mendapatkan detail kursus. Metode ini mengembalikan string yang berisi informasi tentang kursus offline: nama, durasi, dan lokasi.

<h3>OUTPUT</h3>

![Screenshot (485)](https://github.com/user-attachments/assets/4cc9c74b-1991-407b-a73f-83508dbf17f2)

## TUGAS 
<h3>Buat proyek PHP dengan studi kasus</h3>

- CLASS
```php
abstract class Person {
```
- abstract: Kata kunci abstract menunjukkan bahwa Person adalah kelas abstrak. Kelas ini tidak dapat dibuat menjadi objek secara langsung.
- class Person: Mendefinisikan kelas bernama Person.

- ATRIBUT
```php
private $name;
```
private person memiliki atribut nama Menandakan bahwa atribut atau metode hanya dapat diakses dari dalam kelas tempat atribut atau metode tersebut dideklarasikan.
( private $name; )
private: Menetapkan visibilitas atribut.
$name: Nama atribut.

- CONSTRUCT 
```php
public function __construct($name) {
$this->name = $name;
```
function __construct($name): Ini adalah deklarasi metode konstruktor dengan nama __construct
$name: Parameter ini adalah variabel yang diterima oleh konstruktor saat objek dibuat

- METODE
```php
public function getName() {
    }
```
getter yang digunakan untuk mendapatkan nilai dari atribut

```php
public function setName($name) {
    }
````
Setter yang digunakan untuk mengatur atau memodifikasi nilai atribut

```php
abstract public function getRole();
```
getrole digunakan untuk mengembalikan peran atau jenis spesifik dari objek.


- SUB CLASS DOSEN
```php
class Dosen extends Person {
    // Atribut
    private $nidn;
```
- class Dosen extends Person: Kelas Dosen adalah subclass dari kelas Person. Ini berarti Dosen mewarisi semua atribut dan metode dari kelas Person. Kelas Dosen dapat menggunakan metode dan atribut yang ada di kelas Person dan juga dapat menambahkan fitur tambahan yang spesifik untuk dosen.
- private $nidn: Ini adalah atribut baru yang ditambahkan khusus untuk kelas Dosen. Atribut ini menyimpan nomor identifikasi dosen (NIDN) dan bersifat private, sehingga hanya dapat diakses dari dalam kelas Dosen

```php
    public function __construct($name, $nidn) {
      parent::__construct($name);
        $this->nidn = $nidn;
    }
```
- parent::__construct($name): Memanggil konstruktor kelas induk Person untuk menginisialisasi atribut name
- $this->nidn = $nidn: Menginisialisasi atribut nidn dengan nilai yang diberikan saat objek Dosen dibuat.

- SUB CLASS MAHASISWA

```php
class Mahasiswa extends Person {
    // Atribut
    private $nim;
```
Sub class Mahasiswa mempunyai atribut nim dengan aksesbiliti private yang hanya dapat di akses oleh metode tertentu

```php
public function getRole() {
        return "Mahasiswa";
```
getRole sebagai metode untuk mengidentifikasi jabatan 

- SUB CLASS JURNAL

```php
class JurnalDosen extends Jurnal {
    public function manageSubmission() {
        return "Jurnal Dosen untuk saat ini sedang diproses.";
    }
```

```php
class JurnalMahasiswa extends Jurnal {
    public function manageSubmission() {
        return "Jurnal Mahasiswa untuk saat ini sedang diproses.";
    }
```
public function manageSubmission(): Metode ini adalah metode publik dalam kelas JurnalDosen. Karena dideklarasikan dengan visibilitas public, metode ini dapat diakses dari luar kelas JurnalDosen, termasuk dari instansi objek JurnalDosen atau kode lain yang menggunakan objek

```php
$dosen = new Dosen("Bapak Lutfhi Syafirullah", "0621118402");
$mahasiswa = new Mahasiswa("Noni Aprillia", "230102040");
```
$dosen: Merupakan objek dari kelas Dosen, yang memiliki nama "Bapak Lutfhi Syafirullah" dan NIDN "0621118402".

$mahasiswa: Merupakan objek dari kelas Mahasiswa, yang memiliki nama "Noni Aprillia" dan ID mahasiswa "230102040".

```php
echo "Data Dosen:<br>";
echo "Nama: " . $dosen->getName() . "<br>";
echo "NIDN: " . $dosen->getNidn() . "<br>";
echo "Role: " . $dosen->getRole() . "<br><br>";

echo "Data Mahasiswa:<br>";
echo "Nama: " . $mahasiswa->getName() . "<br>";
echo "NIM: " . $mahasiswa->getNim() . "<br>";
echo "Role: " . $mahasiswa->getRole() . "<br><br>"
```
Menampilkan output nya 

```php
$jurnalDosen = new JurnalDosen();
$jurnalMahasiswa = new JurnalMahasiswa();

echo $jurnalDosen->manageSubmission() . "<br>";
echo $jurnalMahasiswa->manageSubmission() . "<br>";
```
Menggunakan atau memanggil kelas Jurnal 

<h3>OUTPUT</h3>

![Screenshot (486)](https://github.com/user-attachments/assets/7bc78481-47fd-4d49-b66d-602ff8e62d37)
