<?php
//DEFINISI
class Mobil {
    //ATRIBUT
    public $merk;
    public $warna;
    //Construct
    public function __construct($merk, $warna){
        $this->merk=$merk;
        $this->warna=$warna;
    }
    //METODE 
    public function deskripsi(){
        return "Mobil ini adalah $this->merk berwarna $this->warna.";
    }
}
    //INSTANSIASI
    $Mobil1 = new Mobil("TOYOTA", "MERAH");
    echo $Mobil1->deskripsi();
?>