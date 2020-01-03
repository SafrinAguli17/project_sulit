<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Template');
        //$this->load->helper('url');
        $this->load->model('m_list_pendaftar');
        $this->load->model('m_persetujuan_judul');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'HALAMAN SKRIPSI';
        // $judul['nama_judul'] = $data['user']['nama'];
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $nama['nama_user'] = $data['user']['nama'];
        $this->template->display('main/beranda', $data + $nama);
    }
    public function dosen()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Email Harus di Isi',
            'valid_email' => 'Email Anda tidak Valid'
        ]);
        $this->form_validation->set_rules('pass', 'Pass', 'required|trim', [
            'required' => 'Password Harus di Isi'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Dosen';
            $this->load->view('dosen/v_login', $data);
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('pass');

            $user = $this->db->get_where('dosen', ['email_dosen' => $email])->row_array();
            $pass = $this->db->get_where('dosen', ['password_dosen' => $password])->row_array();

            if ($user || $pass) {
                $this->session->set_userdata($data);
                redirect('index.php/dosen');
            } else {
                $this->session->set_flashdata('message', '<div class="alert 
                alert-warning" role="alert"> PASSWORD SALAH </div>');
                redirect('index.php/main/dosen');
            }

            $judul['title'] = 'HALAMAN DOSEN';
            $nama['nama_user'] = 'Dosen Admin';
            $this->load->view('dosen/v_dosen', $judul + $nama);
        }
    }
    public function fitur_1()
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
            $this->template->display('mahasiswa/fitur_1', $data + $nama);
        } else {
            $kirim = [
                'nim' => ($this->input->post('nim')),
                'nama' => ($this->input->post('nama')),
                'email' => ($this->input->post('email_1')),
                'hp' => ($this->input->post('hp')),
                'judul_skripsi' => ($this->input->post('judul')),
                'draf' => ($this->input->post('draf')),
                'time' => time()
            ];
            $this->db->insert('list_pendaftar', $kirim);
            redirect('index.php/main/fitur_2');
        }
    }
    public function fitur_2()
    {
        $data['title'] = 'LIST PENDAFTAR';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $nama['nama_user'] = $data['user']['nama'];
        // $tabel_pendaftar['list_daftar'] = $this->m_list_pendaftar->show_list();
        $this->template->display('Mahasiswa/fitur_2', $data + $nama);
    }
    public function fitur_3()
    {
        $data['title'] = 'PERSETUJUAN JUDUL';
        // JUDUL NAMA DARI DATABASE
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $nama['nama_user'] = $data['user']['nama'];
        // AKHIR JUDUL NAMA
        $tabel_persetujuan['persetujuan_judul'] = $this->m_persetujuan_judul->show_list();
        $this->template->display('Dosen/v_persetujuan_judul', $tabel_persetujuan + $data + $nama);
    }
}
