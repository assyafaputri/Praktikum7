<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
    public function index() {
        $this->load->model('Mahasiswa_model','mhs1');
        $this->mhs1->id=1;
        $this->mhs1->nim='010001';
        $this->mhs1->nama='Dimas Ahmad';
        $this->mhs1->gender='L';
        $this->mhs1->ipk=3.85;

        $this->load->model('Mahasiswa_model','mhs2');
        $this->mhs2->id=2;
        $this->mhs2->nim='020001';
        $this->mhs2->nama='Rifa Nabilah';
        $this->mhs2->gender='P';
        $this->mhs2->ipk=3.35;

        $this->load->model('Mahasiswa_model','mhs3');
        $this->mhs3->id=3;
        $this->mhs3->nim='030001';
        $this->mhs3->nama='Pinta Siregar';
        $this->mhs3->gender='P';
        $this->mhs3->ipk=3.55;

        $this->load->model('Mahasiswa_model','mhs4');
        $this->mhs4->id=4;
        $this->mhs4->nim='040001';
        $this->mhs4->nama='Emania Apriliana';
        $this->mhs4->gender='P';
        $this->mhs4->ipk=3.95;

        $this->load->model('Mahasiswa_model','mhs5');
        $this->mhs5->id=5;
        $this->mhs5->nim='050001';
        $this->mhs5->nama='Tegar Yudha';
        $this->mhs5->gender='L';
        $this->mhs5->ipk=2.95;

        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3, $this->mhs4, $this->mhs5];
        $data['list_mhs']=$list_mhs;
        $this->load->view('mahasiswa/index',$data);
    } 
}
?>