<?php defined('BASEPATH')OR exit('No direct script access allowed');
Class Form extends CI_Controller{
    public function __construct(){
         parent::__construct();
         $this->load->helper(array('url','form'));
    }
    public function _name_test($username){
        if($username!=='nakaya'){
            return true;
                  }else{
           $this->form_validation->set_message('_name_test','['.$username.']はすでに使用されています');
            return false;
      }
    }
    public function _password_test($password){
        if($password==='test'){
             $this->form_validation->set_message('_password_test','['.$password.']は使用できません');
             return false;
          }
             return true;
    }
    public function _email_test($email){
        if($email)
    }
    public function index(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','ユーザー名','required|callback__name_test',array('required'=>'%sは必須です',));
        $this->form_validation->set_rules('password','パスワード','required|callback__password_test',array('required'=>'%sは必須です'));
        $this->form_validation->set_rules('passconf','パスワード確認','matches[password]',
        array('matches'=>'%sが一致していません'));
        $this->form_validation->set_rules('email', 'メールアドレス','required|valid_email',array('required'=>'%sは必須です'));
        if($this->form_validation->run()==false){
              $this->load->view('myform');
        }else{
            $this->load->view('formsuccess');
        }
    }
}
