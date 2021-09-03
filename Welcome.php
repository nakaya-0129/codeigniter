<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

        public function __construct(){
          parent::__construct();  
          $this->load->helper('url');
          $this->load->helper('form');
        }


        //---------------------
	public function index(){
          $this->load->helper('url');
          $this->load->view('index');
	}

        public function test2(){
          $this->load->view('first');
  
              
        }
        public function test3(){
          echo "bbb";
          exit;
       }
       public function test4(){
          echo "ccc";
          exit;
       }
       public function pref(){
         $this->load->view('pref');
       }
}
