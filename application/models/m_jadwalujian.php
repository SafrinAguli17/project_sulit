<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class M_jadwalujian extends CI_Model{
	
	function show_list(){
		 $hasil=$this->db->query("select * from list_pendaftar");
		return $hasil;
    }
    
}

 ?>