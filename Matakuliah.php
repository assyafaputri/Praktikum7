<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Matakuliah extends CI_Controller {
    public function index() {
        $this->load->model('Matakuliah_model','matkul1');
        $this->matkul1->id=1;
        $this->matkul1->nama='Pemrograman Web 2';
        $this->matkul1->sks='3';
        $this->matkul1->kode='12008';


        $this->load->model('Matakuliah_model','matkul2');
        $this->matkul2->id=2;
        $this->matkul2->nama='Basis Data';
        $this->matkul2->sks='4';
        $this->matkul2->kode='12009';

        $this->load->model('Matakuliah_model','matkul3');
        $this->matkul3->id=3;
        $this->matkul3->nama='Statistik dan Probabilitas';
        $this->matkul3->sks='2';
        $this->matkul3->kode='12005';
        
        $this->load->model('Matakuliah_model','matkul4');
        $this->matkul4->id=4;
        $this->matkul4->nama='Jaringan Komputer';
        $this->matkul4->sks='3';
        $this->matkul4->kode='12004';

        $this->load->model('Matakuliah_model','matkul5');
        $this->matkul5->id=5;
        $this->matkul5->nama='User Interface & User Experience';
        $this->matkul5->sks='3';
        $this->matkul5->kode='12007';


        $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3, $this->matkul4, $this->matkul5];
        $data['list_matkul']=$list_matkul;
        $this->load->view('matakuliah/index',$data);
    } 
}
?>