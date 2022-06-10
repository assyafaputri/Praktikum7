<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dosen extends CI_Controller {
    public function index() {
        $this->load->model('Dosen_model','dsn1');
        $this->dsn1->id=1;
        $this->dsn1->nidn='100120334';
        $this->dsn1->nama='Irfan Nisai';
        $this->dsn1->pendidikan='S1 Teknik Industri';

        $this->load->model('Dosen_model','dsn2');
        $this->dsn2->id=2;
        $this->dsn2->nidn='100130445';
        $this->dsn2->nama='Fatimah Rahayu';
        $this->dsn2->pendidikan='S1 Psikolog';

        $this->load->model('Dosen_model','dsn3');
        $this->dsn3->id=3;
        $this->dsn3->nidn='100140556';
        $this->dsn3->nama='Marisha Anggita';
        $this->dsn3->pendidikan='S1 Keperawatan';

        $this->load->model('Dosen_model','dsn4');
        $this->dsn4->id=4;
        $this->dsn4->nidn='100140567';
        $this->dsn4->nama='Karel Susanteo';
        $this->dsn4->pendidikan='S1 Bisnis Manajemen';

        $this->load->model('Dosen_model','dsn5');
        $this->dsn5->id=5;
        $this->dsn5->nidn='100140485';
        $this->dsn5->nama='Adriel Hermawan';
        $this->dsn5->pendidikan='S1 Kedokteran';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3, $this->dsn4, $this->dsn5];
        $data['list_dsn']=$list_dsn;
        $this->load->view('dosen/index',$data);
    } 
}
?>