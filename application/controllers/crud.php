<?php

Class Crud extends CI_Controller {
    
    public function index(){
        $this->load->database();//panggil db
        $this->load->helper('url');//panggil base_url
        $this->load->view("templateheader.php");
        $tampil = $this->daftarbarang_model->Getbarang();
        $this->load->view('daftarbarang', ['tampil'=>$tampil]);
        $this->load->view("templatefooter.php");
        }
    
    public function add_data(){
        $this->load->view('uploadbarang');
    }
    
    public function do_insert(){
        $jb = $_POST['jenis_barang'];
        $jenis_barang = implode(', ', $jb);
        $nama_barang = $_POST['nama_barang'];
        $deskripsi_barang = $_POST['deskripsi_barang'];
        $jumlah_barang = $_POST['jumlah_barang'];
        $harga_sewa = $_POST['harga_sewa'];
        $data_insert = array (
            'jenis_barang' => $jenis_barang,
            'nama_barang' => $nama_barang,
            'deskripsi_barang' => $deskripsi_barang,
            'jumlah_barang' => $jumlah_barang,
            'harga_sewa' => $harga_sewa
        );
        $res = $this->daftarbarang_model->Insertdata('barang', $data_insert);
        if ($res >= 1){
            redirect('crud/index');//akan ditampilkan ke halaman daftar barang
        }else{
            echo "<h2>insert data gagal</h2>";
        }
    }
    
    public function do_delete($nama_barang){
        $where = array('nama_barang' => $nama_barang);
        $this->daftarbarang_model->deletedata($where, 'barang');
        redirect('crud/index');
    }
    
    public function do_edit($nama_barang){
        $where = array ('nama_barang' => $nama_barang);
        $data['barang'] = $this->daftarbarang_model->editdata($where, 'barang')->result();
        $this->load->view("templateheader.php");
        $this->load->view('editbarang' ,$data);
        $this->load->view("templatefooter.php");
    }
    
    public function do_update(){
        $jb = $_POST['jenis_barang'];
        $jenis_barang = implode(', ', $jb);
        $id = $this->input->post('idb');
        $nama_barang = $this->input->post('nama_barang');
        $deskripsi_barang = $this->input->post('deskripsi_barang');
        $jumlah_barang = $this->input->post('jumlah_barang');
        $harga_sewa = $this->input->post('harga_sewa');
        
        $data = array (
            'jenis_barang' => $jenis_barang,
            'nama_barang' => $nama_barang,
            'deskripsi_barang' => $deskripsi_barang,
            'jumlah_barang' => $jumlah_barang,
            'harga_sewa' => $harga_sewa
        );
        
        $where = array(
            'id_barang' => $id
        );
        
        $this->daftarbarang_model->updatedata($where, $data, 'barang');
        redirect('crud/index');
    }
}