<?php
//DEFINISI CLASS
class Dosen{
    //ATRIBUT
    public $nama;
    public $nip;
    public $mataKuliah;
    //METODE
    public function tampilkanDosen(){
        return "Nama : $this->nama<br>
               NIP : $this->nip<br>
               Mata Kuliah : $this->mataKuliah<br>";
    }
}
    //INSTANSIASI 
    $Dosen1 = new Dosen();
    $Dosen1->nama="Cahya Vika Sari <br>";
    $Dosen1->nip="19830501201<br>";
    $Dosen1->mataKuliah="Rekayasa Perangkat Lunak<br>";
    echo $Dosen1->tampilkanDosen();
?>