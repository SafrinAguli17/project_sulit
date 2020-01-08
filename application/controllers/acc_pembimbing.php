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
        $data['title'] = 'Acc Pembimbing';
        // JUDUL NAMA DARI DATABASE
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $nama['nama_user'] = $data['user']['nama'];
        // AKHIR JUDUL NAMA
        $tabel_persetujuan['persetujuan_judul'] = $this->m_acc_pembimbing->show_list();
        $this->template->display('Dosen/v_acc_pembimbing', $tabel_persetujuan + $data + $nama);
    }
}
