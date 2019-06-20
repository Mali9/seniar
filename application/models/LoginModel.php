<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    public function AdminLogin($email, $password) {
        
        //$hashedPassword= sha1($password);
        $q= $this->db->query("select * from admin where username = ? and password = ?",array($email, $password));
      
        if ($q->num_rows() > 0) {
           
            return TRUE;
        } else {
            return FALSE;
        }
    }


}