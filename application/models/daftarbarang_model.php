<?php

Class Daftarbarang_model extends CI_Model {
    public $id_barang;
    public $jenis_barang;
    public $nama_barang;
    public $deskripsi_barang;
    public $jumlah_barang;
    public $harga_sewa;
    public $d;
    public $id_konsumen;
    public $nama_konsumen;
    public $telp_konsumen;
    public $alamat_konsumen;
    public $email_konsumen;
    public $barang_konsumen;
    
    public function Getbarang(){
        $barang = $this->db->query('select * from barang');
        return $barang->result();
    }
    
    public function Insertdata($tableName, $barang){//parameter  untuk function
        $res = $this->db->insert($tableName, $barang); //akan dikirim melalui controller, maka function dibuat parameter
        return $res;//mengembalikan nilai. sebagai notifikasi apakah data berhasil atau tidak
    }
    
    public function editdata($where, $table){
         //$res = $this->db->update($tableName, $barang, $where); //akan dikirim melalui controller, maka function dibuat parameter
        //return $res;//mengembalikan nilai. sebagai notifikasi apakah data berhasil atau tidak
        return $this->db->get_where($table, $where);
    }
    
    public function updatedata($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    
    public function Deletedata($where, $table){
        //$res = $this->db->delete($tableName, $where); //akan dikirim melalui controller, maka function dibuat parameter
        //return $res;//mengembalikan nilai. sebagai notifikasi apakah data berhasil atau tidak
        $this->db->where($where);
        $this->db->delete($table);
    }
    
    public function Getkonsumen(){
        $konsumen = $this->db->query('select * from konsumen');
        return $konsumen->result();
    }
    
}