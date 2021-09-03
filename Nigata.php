<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Nigata extends CI_Controller{
    public function sake(){
        $this->load->view('nigata_sake');        
    }
    public function kome(){
        $this->load->view('nigata_kome'); 
    }
}

