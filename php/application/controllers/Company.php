<?php defined('BASEPATH')OR exit('No direct script access allowed');
Class Company extends CI_Controller{
   public function __construct(){
      parent::__construct();
      $this->load->helper(array('url','form'));
   }
   public function information(){
      $this->load->view('company_information');        
   }
   public function secret(){
      $this->load->view('company_secret');
   }
   public function registar(){
      $data=array("name"=>"nakaya",
                  "address"=>"川口市",
                  "birthday"=>"01/29",
                  "plan_list"=>array("codeigniter","html","勉強会"));
      $this->load->view('company_registar_info',$data);
   }
}
