<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_jadwalseminar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_jadwalseminar');
        $this->load->library('Template');
    }

    public function jadwal_seminar()
    {
        $data['title'] = 'HALAMAN SKRIPSI';
        $nama['nama_user'] = 'Pendaftar Skripsi';
        $x['data'] = $this->m_jadwalseminar->show_list();
        $this->template->display('Dosen/v_jadwal_seminar', $x + $data + $nama);
    }
}
