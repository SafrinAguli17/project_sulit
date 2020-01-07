<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class M_Setpenguji extends CI_Model{
	
	function show_list(){
		 $hasil=$this->db->query("select * from set_penguji");
		return $hasil;
    }

    function show_listpenguji(){
		 $hasil=$this->db->query("select * from dosen");
		return $hasil;
}
}
 ?>