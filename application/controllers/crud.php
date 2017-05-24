<?php

Class Crud extends CI_Controller {
    
    public function index(){
        /*membuat pelemparan data*/
        //$this->load->model('daftarbarang_model');
        //$data = array (
            //"container" => "daftarbarang"
        //);
        //$this->load->model('daftarbarang_model');//panggil model
        //$this->model=$this->daftarbarang_model;//meletakkan model di variabel model
        $this->load->database();//panggil db
        $this->load->helper('url');//panggil base_url
        $this->load->view("templateheader.php");
        $tampil = $this->daftarbarang_model->Getbarang();//tiak perlu result_array karena udh ada di model
        //$this->load->view("template", $data);
        $this->load->view('daftarbarang', ['tampil'=>$tampil]);//meheload view & mengirim data berupa array
        //$this->load->view('daftarbarang.php');
        $this->load->view("templatefooter.php");
        }
}