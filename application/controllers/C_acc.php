<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_acc extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_acc');
        $this->load->library('Template');
    }

    public function index()
    {
        $data['title'] = 'HALAMAN SKRIPSI';
        $nama['nama_user'] = 'Pendaftar Skripsi';
        $x['data'] = $this->m_acc->show_list();
        $this->template->display('Dosen/V_acc', $x + $data + $nama);
    }
}
