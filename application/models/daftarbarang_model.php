<?php

Class Daftarbarang_model extends CI_Model {
    public $id_barang;
    public $jenis_barang;
    public $nama_barang;
    public $deskripsi_barang;
    public $jumlah_barang;
    public $harga_sewa;
    
    public function Getbarang(){
        $barang = $this->db->query('select * from barang');
        return $barang->result();
    }
    
    public function Insertdata($tableName, $barang){//parameter  untuk function
        $res = $this->db->insert($tableName, $barang); //akan dikirim melalui controller, maka function dibuat parameter
        return $res;//mengembalikan nilai. sebagai notifikasi apakah data berhasil atau tidak
    }
    
    public function Updatedata($tableName, $barang, $where){
         $res = $this->db->update($tableName, $barang, $where); //akan dikirim melalui controller, maka function dibuat parameter
        return $res;//mengembalikan nilai. sebagai notifikasi apakah data berhasil atau tidak
    }
    
    public function Deletedata($tableName, $where){
        $res = $this->db->delete($tableName, $where); //akan dikirim melalui controller, maka function dibuat parameter
        return $res;//mengembalikan nilai. sebagai notifikasi apakah data berhasil atau tidak
    }
    
}