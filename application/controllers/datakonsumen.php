<?php

Class Datakonsumen extends CI_Controller {
    
    public function index(){
        $this->load->view("templateheader.php");
        $this->load->view("datakonsumen.php");
        $this->load->view("templatefooter.php");
    }
}