<?php

class DataTim{
    //properties class
    private $nama = ""; 
    private $negara = "";
    private $kota = ""; 
    private $kandang = ""; 
    private $tahunBerdiri = ""; 
    private $kaptenTim = ""; 
    private $pelatih = "";

    //constructor class
    public function __construct($nama = "", $negara = "", $kota = "", $kandang = "", $tahunBerdiri = "", $kaptenTim = "", $pelatih = "")
    {
        $this->nama = $nama;        
        $this->negara = $negara;        
        $this->kota = $kota;        
        $this->kandang = $kandang;        
        $this->tahunBerdiri = $tahunBerdiri;        
        $this->pelatih = $pelatih;        
        $this->kaptenTim = $kaptenTim;        
    }

    /* method set dan get */
        //method setter
    public function setNama($nama){
        $this->nama = $nama;
    }

    public function setNegara($negara){
        $this->negara = $negara;
    }

    public function setKota($kota){
        $this->kota = $kota;
    }

    public function setKandang($kandang){
        $this->kandang = $kandang;
    }

    public function setTahunBerdiri($tahunBerdiri){
        $this->tahunBerdiri = $tahunBerdiri;
    }

    public function setPelatih($pelatih){
        $this->pelatih = $pelatih;
    }

    public function setKaptenTim($kaptenTim){
        $this->kaptenTim = $kaptenTim;
    }

        //method getter
    public function getNama(){
        return $this->nama;
    }

    public function getNegara(){
        return $this->negara;
    }

    public function getKota(){
        return $this->kota;
    }

    public function getKandang(){
        return $this->kandang;
    }

    public function getTahunBerdiri(){
        return $this->tahunBerdiri;
    }

    public function getPelatih(){
        return $this->pelatih;
    }

    public function getKaptenTim(){
        return $this->kaptenTim;
    }

        // prosedur print hasil
    // public function printHasil(){
    //     return "Nama: " . $this->getNama() . "<br/>" . "Negara: " . $this->getNegara() . "<br/>" . "Kandang: " . $this->getKandang() . "<br/>" . "Tahun Berdiri: " . $this->getTahunBerdiri() . "<br/>" . "Pelatih: " . $this->getPelatih() . "<br/>" . "Kapten Tim : " . $this->getKaptenTim() . "<br/>";
    // }
        //destructor
    public function __destruct()
    {
    }
}
?>