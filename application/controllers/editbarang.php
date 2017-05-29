<?php

Class Editbarang extends CI_Controller {
    
    public function index(){
        $this->load->view("templateheader.php");
        $this->load->view("editbarang.php");
        $this->load->view("templatefooter.php");
    }
}