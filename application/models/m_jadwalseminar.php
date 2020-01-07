<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_jadwalseminar extends CI_Model
{

    function show_list()
    {
        $hasil = $this->db->query("select * from jadwal_seminar");
        return $hasil;
    }
}
