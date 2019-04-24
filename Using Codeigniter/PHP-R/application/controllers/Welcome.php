<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 function index(){
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

	 function bigmenu(){
		 $this->load->view('v_header_bigmenu');
		 $this->load->view('v_bigmenu');
		 $this->load->view('v_footer');
	 }


}
