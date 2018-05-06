<?php
class Controller{
    private  $dosen, $kelas, $displayAwal, $displayAkhir;
    public function getHalamanPertama(){
        $this->displayAwal = new View();
        $this->displayAwal->halamanPertama();
    }
    public function getHalamanMockedup(){
        $this->dosen = new Model();
        $pengajar = $this->dosen->pengajar();
        $this->kelas = new Model();
        $jadwalKelas = $this->kelas->jadwalKelas();
        $this->displayAkhir = new View();
        $this->displayAkhir->halamanMockedup($pengajar, $jadwalKelas);
    }
}