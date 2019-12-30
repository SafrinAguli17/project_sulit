<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Acc_Pembimbing extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_acc_pembimbing');
        $this->load->library('Template');
    }

    public function index()
    {
        $data['title'] = 'HALAMAN SKRIPSI';
        $nama['nama_user'] = 'Pendaftar Skripsi';
        $x['data'] = $this->m_acc_pembimbing->show_list();
        $this->template->display('Dosen/v_acc_pembimbing', $x + $data + $nama);
    }
}
