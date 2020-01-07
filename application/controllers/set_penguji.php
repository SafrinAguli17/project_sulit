<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class set_penguji extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_setpenguji');
        $this->load->model('m_jadwalujian');
        $this->load->library('Template','form_validation');
    }

    public function index()
    {
        $data['title'] = 'HALAMAN SKRIPSI';
        $nama['nama_user'] = 'Pendaftar Skripsi';
        $x['data'] = $this->m_setpenguji->show_list();
        $y['pilih'] = $this->m_setpenguji->show_listpenguji();
        $this->template->display('Dosen/v_setpenguji',$y + $x + $data + $nama);
    }
    public function jadwal_ujian()
    {
        $data['title'] = 'HALAMAN SKRIPSI';
        $nama['nama_user'] = 'Pendaftar Skripsi';
        $x['data'] = $this->m_jadwalujian->show_list();
        $this->template->display('Dosen/v_jadwal_ujian', $x + $data + $nama);
    }
    public function add(){
            $produk=$this->m_setpenguji;
            $validation = $this->form_validation;
            $validation->set_rules($produk->rules());

            if ($validation->run()){
                $produk->save();
                $this->session->set_flashdata('success','Berhasil Disimpan');
            }
            $this->load->view("Dosen/v_setpenguji");
}
 public function hasilujian()
    {
        $judul['title'] = 'HALAMAN SKRIPSI';
        $nama['nama_user'] = 'Pendaftar Skripsi';
        $this->template->display('Mahasiswa/v_hasilujian.php',$judul + $nama);
}
}


 ?>