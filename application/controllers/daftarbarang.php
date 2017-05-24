<?php

Class Daftarbarang extends CI_Controller {
    
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
    
    /*public function insert(){
        $res = $this->daftarbarang_model->insertdata('barang', array(
            "jenis_barang" => "action cam",
            "nama_barang" => "kamera b",
            "deskripsi_barang" => "merupakan action camera",
            "jumlah_barang" => "3",
            "harga_sewa" => "20000",
        )); 
        
        if($res >= 1){
            echo "<h2>Insert Data Berhasil</h2>";
        }else{
            echo "<h2>Insert Data Gagal</h2>";
        }
    }
    
    public function update(){
        $res = $this->daftarbarang_model->updatedata('barang', array(
            "harga_sewa" => "15000",
        ),array('id_barang' => "1"));
        
        if($res >= 1){
            echo "<h2>Update Data Berhasil</h2>";
        }else{
            echo "<h2>Update Data Gagal</h2>";
        }
    }
    
    public function delete(){
       $res = $this->daftarbarang_model->deletedata('barang', array('id_barang' => "1"));
        
        if($res >= 1){
            echo "<h2>Delete Data Berhasil</h2>";
        }else{
            echo "<h2>Delete Data Gagal</h2>";
        } 
    }*/
}