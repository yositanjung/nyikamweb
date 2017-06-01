<?php

Class Datakonsumen extends CI_Controller {
    
    public function index(){
        $this->load->database();//panggil db
        $this->load->helper('url');//panggil base_url
        $this->load->view("templateheader.php");
        $konsumen = $this->barang_model->Getkonsumen();//tiak perlu result_array karena udh ada di model
        //$this->load->view("template", $data);
        $this->load->view('datakonsumen', ['konsumen'=>$konsumen]);//meheload view & mengirim data berupa array
        //$this->load->view('daftarbarang.php');
        $this->load->view("templatefooter.php");
        }   
}