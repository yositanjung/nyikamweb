<?php

Class Uploadbarang extends CI_Controller {
    
    public function index(){
        $this->load->view("templateheader.php");
        $this->load->view("uploadbarang.php");
        $this->load->view("templatefooter.php");
    }
}