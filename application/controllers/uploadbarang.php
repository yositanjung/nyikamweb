<?php

Class Uploadbarang extends CI_Controller {
    
    public function index(){
        $this->load->view("templateheader.php");
        $this->load->view("uploadbarang.php");
        $this->load->view("templatefooter.php");
    }
    
    public function do_insert(){
        $nama_barang = $_POST['nama_barang'];
        $deskripsi_barang = $_POST['deskripsi_barang'];
        $jumlah_barang = $_POST['jumlah_barang'];
        $harga_sewa = $_POST['harga_sewa'];
        $data_insert = array (
            'nama_barang' => $nama_barang,
            'deskripsi_barang' => $deskripsi_barang,
            'jumlah_barang' => $jumlah_barang,
            'harga_sewa' => $harga_sewa
        );
        $res = $this->daftarbarang_model->Insertdata('barang', $data_insert);
        if ($res >= 1){
            redirect('daftarbarang/index');
        }else{
            echo "<h2>insert data gagal</h2>";
        }
    }
}