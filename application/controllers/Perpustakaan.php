<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpustakaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Perpustakaan_model');
	}

	public function index()
	{
		$this->load->view('index.php');
	}

	public function data_buku($page)
	{
		$data = array(
			'buku' => $this->Perpustakaan_model->getAllBuku($page),
			'halaman' => $this->Perpustakaan_model->getAllPage()
		);
		$this->load->view('v_data.php',$data);
	}

	public function tambah_data()
  {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');

		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('penulis','Penulis','required');
		$this->form_validation->set_rules('edisi','Edisi','required');
		$this->form_validation->set_rules('penerbit','Penerbit','required');
		$this->form_validation->set_rules('tahun','Tahun','required');

        if($this->form_validation->run()== false)
        {
          $this->load->view('v_add');
        }
        else
        {
            $this->Perpustakaan_model->tambahDataBuku();
            $this->session->set_flashdata('message','<div class="alert alert-info" role="alert">
            Data Berhasil Ditambahkan
          	</div>');
            redirect('Perpustakaan/data_buku/1');
        }
    }

	public function ubah_data($id)
    {
          $this->load->helper('form');
          $this->load->library('form_validation');
		  $this->load->library('session');
		  $data['buku'] = $this->Perpustakaan_model->getBukuById($id);
		  
		  $this->form_validation->set_rules('id','id','required');
          $this->form_validation->set_rules('judul','Judul','required');
          $this->form_validation->set_rules('penulis','Penulis','required');
          $this->form_validation->set_rules('edisi','Edisi','required');
		  $this->form_validation->set_rules('penerbit','Penerbit','required');
		  $this->form_validation->set_rules('tahun','Tahun','required');
          
          if ($this->form_validation->run() == false) {
			$this->load->view('v_edit', $data);
          } else {
              $this->Perpustakaan_model->ubahDataBuku();
              $this->session->set_flashdata('flash', 'Diubah');
              redirect('Perpustakaan/data_buku/1');
          }
	}
	
	public function hapus($id)
	{
		$this->load->library('session');
		$this->Perpustakaan_model->hapusDataBuku($id);
		$this->session->set_flashdata('message','<div class="alert alert-info" role="alert">
		Data Berhasil Dihapus
	  </div>');
		redirect('Perpustakaan/data_buku/1');
	}
}
