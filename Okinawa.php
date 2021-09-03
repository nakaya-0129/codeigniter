<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Okinawa extends CI_Controller{
   public function soukisoba(){
       $this->load->view('okinawa_soukisoba');
   } 
   public function faile_moji(){
       $this->load->view('okinawa_faile_moji');
   }
}
