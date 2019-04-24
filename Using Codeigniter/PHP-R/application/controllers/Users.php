<?php

class Users extends CI_Controller{

function login(){
  $contenido['error']=0;

  if($_POST){
  $this->load->model('ModelUser');

  $acceso=array('username' => $_POST['username'],'password' => $_POST['password']);

    $u=$this->ModelUser->login($acceso);

    if (!$u){
      $contenido['error']=1;
    }else{
      $this->session->set_userdata('username',$u['username']);
      $this->session->set_userdata('usertype',$u['type']);
      redirect(base_url().'Welcome/bigmenu');
    }
  }
  $this->load->view('v_header_bigmenu');
  $this->load->view('v_login',$contenido);
  $this->load->view('v_footer');
}

function logout(){
  $this->session->sess_destroy();
  redirect(base_url().'users/login');
}

}
