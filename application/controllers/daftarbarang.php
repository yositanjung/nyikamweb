<?php

Class Daftarbarang extends CI_Controller {
    
    public function index(){
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