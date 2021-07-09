<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Aomori extends CI_Controller{
   public function __construct(){
      parent::__construct();
      $this->load->helper('url');
      $this->load->helper('form');
   }
   public function ringo(){
      $this->load->view('aomori_ringo');
   }
   public function hurutu(){
      $this->load->view('aomori_hurutu');
   } 
   public function registar(){
     $this->load->view('aomori_registar');
   }
}
