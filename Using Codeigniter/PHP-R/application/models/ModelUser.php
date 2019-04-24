<?php

class ModelUser extends CI_Model{

  function login($acceso){
     $login=array('username' =>$acceso['username'] ,'password'=>$acceso['password'] );
     $this->db->select()->from('user')->where($login);
     $query=$this->db->get();
     return $query->first_row('array');
  }
}
