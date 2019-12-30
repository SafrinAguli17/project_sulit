<?php
defined('BASEPATH') or exit('No direct script access allowed');

class List_Proposal extends CI_Controller
{
	function __construct(){
    parent::__construct();
    $this->load->model('m_list_proposal');
    $this->load->library('Template');
}

public function index(){
    $data['title'] = 'HALAMAN SKRIPSI';
        $nama['nama_user'] = 'Pendaftar Skripsi';
    $x['data']=$this->m_list_proposal->show_list();
    $this->template->display('Mahasiswa/v_list_proposal',$x + $data + $nama);
}
}
