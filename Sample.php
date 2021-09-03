<?php defined('BASEPATH')OR exit('No direct script access allowed');
Class Sample extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
    } 
    public function test_code(){
        $this->load->view('sample_header');
        $this->load->view('sample_main');
        $this->load->view('sample_footer');
    }
}
