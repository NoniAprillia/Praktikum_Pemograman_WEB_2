<?php
//DEFINISI KELAS 
class Mahasiswa {
    //ATRIBUT
    public $nama;
    public $nim;
    public $jurusan;
    //CONSTRUCT
    public function __construct($nama, $nim, $jurusan) {
        $this->nama=$nama;
        $this->nim=$nim;
        $this->jurusan=$jurusan;
    }
    //METODE
    public function updateJurusan(){
    return "<br> Nama: $this->nama </br> <br> NIM: $this->nim </br> <br> Jurusan: $this->jurusan </br>";
    }
}

$mahasiswa1 = new Mahasiswa ("Noni Aprillia", "230102040", "Kombis");
echo $mahasiswa1->updateJurusan();

?>