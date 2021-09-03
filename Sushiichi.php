<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sushiichi extends CI_Controller {
        //---------------------
	public function index(){
         $this->load->helper('url');
         echo "aaa";
         exit;
         $this->load->view('index');
	}
	public function sousaku(){
         $this->load->helper('url');
         $this->load->view('sousaku');
        }    
	public function sinagaki(){
         $this->load->helper('url');
         $this->load->view('sinagaki');
        }    
	public function form(){
         $this->load->helper('url');
         $this->load->view('form');
        }    
        public function pref(){
         $this->load->view('pref');
        }
}
