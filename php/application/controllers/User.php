<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


        //----------------------
        public function test(){
        }


        //---------------------
	public function index(){

            $this->load->view('welcome_message');
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
       public function sushiichi(){ 
         $this->load->view('sushiichi');
       }
}
