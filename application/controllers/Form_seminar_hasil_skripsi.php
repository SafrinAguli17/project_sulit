<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_seminar_hasil_skripsi extends CI_Controller
{
    function __construct(){
    parent::__construct();
    // $this->load->model('m_form_seminar_hasil_skripsi');
    $this->load->library('Template');
    }

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Harus di Isi'
        ]);
        $this->form_validation->set_rules('email_1', 'Email_1', 'required|trim|valid_email|is_unique[list_pendaftar.email]', [
            'required' => 'Email Harus di Isi',
            'is_unique' => 'Email Sudah Digunakan'
        ]);
        $this->form_validation->set_rules('hp', 'Hp', 'required|trim', [
            'required' => 'Nama Harus di Isi'
        ]);
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', [
            'required' => 'Nama Harus di Isi'
        ]);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'HALAMAN SKRIPSI';
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();
            $nama['nama_user'] = $data['user']['nama'];
            $nama['nn'] = $data['user']['nomor'];
            $nama['user_nama'] = $data['user']['nama'];
            $this->template->display('mahasiswa/v_form_seminar_hasil_skripsi', $data + $nama);
        } else {
            $kirim = [
                'nim' => ($this->input->post('nim1')),
                'nama' => ($this->input->post('nama')),
                'email' => ($this->input->post('email_1')),
                'hp' => ($this->input->post('hp')),
                'judul_skripsi' => ($this->input->post('judul')),
                // 'draf' => ($this->input->post('draf') . ('||') . ($this->input->post('nama'))
                //     . ('||') . ($this->input->post('nim1'))),
                'time' => time()
            ];
            $this->db->insert('list_pendaftar', $kirim);
            redirect('index.php/acc_pembimbing');
        }
    }
}
