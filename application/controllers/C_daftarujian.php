<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_daftarujian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('m_form_seminar_hasil_skripsi');
        $this->load->library('Template');
    }

    public function index()
    {
        $data['title'] = 'HALAMAN SKRIPSI';
        $nama['nama_user'] = 'Pendaftar Skripsi';
        $this->template->display('mahasiswa/v_form_daftar_ujian', $data + $nama);
    }
}
