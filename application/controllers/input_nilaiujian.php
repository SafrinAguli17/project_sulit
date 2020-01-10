<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class input_nilaiujian extends CI_Controller{
		public function __construct(){
			parent ::__construct();
			$this->load->model('m_inputnilai');
			$this->load->library('form_validation');
			$this->load->library('Template');
			 $this->load->helper('url');
				// if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));

		}
		public function index(){
			if($this->session->userdata('level')==2){

		$x['data'] = $this->m_inputnilai->show_list();
		$data["produks"]=$this->m_inputnilai->getAll();	
		$data['title'] = 'HALAMAN SKRIPSI';
        // JUDUL NAMA DARI DATABASE
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $nama['nama_user'] = $data['user']['nama'];
        // AKHIR JUDUL NAMA 

        $this->template->display('Dosen/v_forminputnilai',$x + $nama + $data);
    }
		}
		public function update (){			
		// $post = $this->input->post();
		// $this->nim=$post["nim"];
		// $this->nilai11=$post["nilai1"];
		// $this->nilai11=$post["nilai2"];
		// $this->nilai11=$post["nilai3"];
		
		// $this->db->update($this->_table,array("nim"=>$post['nim']));
		 $kirim = [
                'nilai1' => ($this->input->post('nilai1')),
                'nilai2' => ($this->input->post('nilai2')),
                'nilai3' => ($this->input->post('nilai3'))
            ];

            $data['user']= $this->db->get_where('user',['username' => 
            $this->session->userdata('username')])->row_array();
            $nama = $data['user']['nomor'];

            $where=array('nim'=>$nama);
            $this->db->where($where);
            $this->db->update('list_pendaftar',$kirim);
            
	}

		
		}







 ?>