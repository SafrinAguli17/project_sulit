<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class set_penguji extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_setpenguji');
        $this->load->library('Template');
    }

    public function index()
    {
        $data['title'] = 'HALAMAN SKRIPSI';
        $nama['nama_user'] = 'Pendaftar Skripsi';
        $x['data'] = $this->m_setpenguji->show_list();
        $this->template->display('Dosen/v_setpenguji', $x + $data + $nama);
    }
    public function jadwal_ujian()
    {
    	$data['title'] = 'HALAMAN SKRIPSI';
        $nama['nama_user'] = 'Pendaftar Skripsi';
        $x['data'] = $this->m_setpenguji->show_list();
        $this->template->display('Dosen/v_jadwal_ujian', $x + $data + $nama);
    }
}
 ?>