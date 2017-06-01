<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model_login');
 
	}
 
	function index(){
		$this->load->view('login_view');//load tampilan 
	}
 
	function aksi_login(){//menangkap data uname & pass
		$uname_admin = $this->input->post('uname_admin');
		$password = $this->input->post('password');
		$where = array(//data yg ditangkap dikirim ke array, dikirim ke model
			'uname_admin' => $uname_admin,
			'password' => $password,
			);
        
		$cek = $this->model_login->cek_login("admin",$where)->num_rows();//mengecek data di db melalui model||num_rows u/ menghitung jumlah record
        
		if($cek > 0){//cek data||jika data benar, mk bernilai  > 0
 
			$data_session = array( //dibuat session berisi uname yg tdi diisi & session status login
				'nama' => $uname_admin,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("home"));//dialihkan ke controller admin
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();//menghapus semua session saat admin logout
		redirect(base_url('login'));//kembali ke halaman login
	}
}