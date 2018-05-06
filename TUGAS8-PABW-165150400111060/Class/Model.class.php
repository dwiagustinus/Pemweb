<?php
class Model{
    public function jadwalKelas(){
        $kelas = array('Senin','Selasa','Rabu','Kamis',
            'Jumat','Sabtu','Minggu');
        $rand = $kelas[array_rand($kelas)];
        return $rand;
    }
    public function pengajar(){
        $pengajar = array('Anwar Beta M.Mus.','Rahmadini Anggara M.Mus.','Bethani Sthepani','Maria Sarah Untani M.Mus.','David Anderson G.');
        $rand = $pengajar[array_rand($pengajar)];  
        return $rand;      
    }
}