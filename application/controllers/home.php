<?php 
 
class Home extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){//cek session status apakah sdh login atw blm
			redirect(base_url("login"));//jika blm login kembali ke halaman login
		}
	}
 
	function index(){
        $this->load->view('templateheader');
		$this->load->view('home');
        $this->load->view('templatefooter');
	}
}