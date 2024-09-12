<?php
//DEFINISIKAN CLASS
class Mahasiswa {
    //ATRIBUT
    public $nama;
    public $nim;
    public $jurusan;

    //METODE
    public function tampilkanData(){
        return " <br> Nama : $this->nama </br> <br> NIM : $this->nim </br> <br> Jurusan : $this->jurusan </br>";
    }
}
    //INSTANSIASI OBJEK
    $Mahasiswa1 = new Mahasiswa();
    $Mahasiswa1->nama="Noni Aprillia";
    $Mahasiswa1->nim="230102040";
    $Mahasiswa1->jurusan="Komputer dan Bisnis";
    echo $Mahasiswa1->tampilkanData();
    
?>
