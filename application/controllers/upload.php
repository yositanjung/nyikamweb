<?php

class Upload extends CI_Controller{
   
    function __construct(){
        parent::__construct();
            $this->load->helper(array('form', 'url'));
    }
    
    public function index(){
        $this->load->view('uploadbarang', array('error' => ' '));
    }
    
    public function do_upload(){
        $config['upload_path']          = './assets/images/'; //pengatur kemana file akan diupload
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        
        $this->load->library('upload', $config); //memanggil library upload ci
        
        if (!$this->upload->do_upload('userfile')){ //melakukan aksi
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('uploadbarang', $error);//jika file tdk bisa diupload, pesan error dimasukkan dlm var error & parsing ke view upload untuk ditampilkan pesan error
        }else{
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('daftarbarang', $data);//jika berhasil di upload, dimasukkan dlm var data u/ parsing ke view daftar barang
        }
    }
}