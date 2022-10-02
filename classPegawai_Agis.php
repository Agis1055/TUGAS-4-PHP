<?php
class Pegawai{
    //member 1 variabel
    public $nip, $nama, $jabatan, $agama, $status, $gapok, $tunjab, $tunkel, $zakatprofes, $gakot, $gaber;

    //member 2 konstruktor
    public function __construct($nip, $nama, $jabatan, $agama, $status, $gapok, $tunjab, $tunkel, $zakatprofes, $gakot, $gaber)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        $this->gapok = $gapok;
        $this->tunjab = $tunjab;
        $this->tunkel = $tunkel;
        $this->zakatprofes = $zakatprofes;
        $this->gakot = $gakot;
        $this->gaber = $gaber;
    }

    //member 3 method
    public function setGajiPokok($jabatan, $gapok){
        $this->jabatan = $jabatan;
        switch ($jabatan){
            case "manager":
                $gapok = 15000000;
                break;
            case "asmen":
                $gapok = 10000000;
                break;
            case "kabag":
                $gapok = 7000000;
                break;
            case "staff":
                $gapok = 4000000;
                break;
            default:
                $gapok = 0;
        }
    }
    
    public function setTunjab($tunjab, $gapok){
        $this->tunjab = $tunjab;
        $tunkel = 0.20 * $gapok;
    }

    public function setTunkel($tunkel, $gapok, $status){
        $this->tunkel = $tunkel;
        if($status = 'menikah')
        $tunkel = 0.10 * $gapok;
        else $tunkel = 0;
    }

    public function setGakot($gapok, $tunjab, $tunkel, $gakot){
        $this->gakot = $gakot;
        $gakot = $gapok + $tunjab + $tunkel;
    }
    public function setZakatProfesi($zakatprofes, $gapok, $agama, $gakot){
        $this->zakatprofes = $zakatprofes;
        if($agama = 'islam' && $gakot >= 4000000)
        $zakatprofes = 0.025 * $gapok;
        else $zakatprofes = 0;
    }
    public function setGaber($gakot, $gaber, $zakatprofes){
        $this->gaber = $gaber;
        $gaber = $gakot - $zakatprofes;
    }

    public function cetak(){
        echo 'NIP : '.$this->nip;
        echo 'Nama : '.$this->nama;
        echo 'Jabatan : '.$this->jabatan;
        echo 'Agama : '.$this->agama;
        echo 'Status : '.$this->status;
        echo 'Gaji Pokok : '.$this->gapok;
        echo 'Tunjangan Jabatan : '.$this->tunjab;
        echo 'Tunjangan Keluarga : '.$this->tunkel;
        echo 'Zakat : '.$this->zakatprofes;
        echo 'Gaji Bersih : '.$this->gaber;
    }
}
?>
