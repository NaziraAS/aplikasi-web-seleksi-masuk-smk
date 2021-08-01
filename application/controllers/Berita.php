<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("berita_model");
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['berita'] = $this->berita_model->getAll();
		$this->load->view("template/header_app");
		$this->load->view("template/sidebar");
		$this->load->view("template/topbar");
		$this->load->view('berita/index',$data);
		$this->load->view("template/fother_app");
	}
    public function tambah()
	{
		$this->load->view("template/header_app");
		$this->load->view("template/sidebar");
		$this->load->view("template/topbar");
		$this->load->view('berita/tambah');
		$this->load->view("template/fother_app");
	}
    public function save()
	{
		$this->form_validation->set_rules('id_berita','ID Berita','required');
		$this->form_validation->set_rules('judul','Judul Berita','required');
		$this->form_validation->set_rules('isi_berita','Isi Berita','required');
		$this->form_validation->set_rules('hari','Hari','required');
		$this->form_validation->set_rules('tgl','Tanggal','required');
		$this->form_validation->set_rules('jam','Jam','required');
        $this->form_validation->set_rules('gambar','Gambar','required');
		$this->form_validation->set_rules('id_user','ID User','required');
		if ($this->form_validation->run()==true)
        {
			$data['id_berita'] = $this->input->post('id_berita');
			$data['judul'] = $this->input->post('judul');
			$data['isi_berita'] = $this->input->post('isi_berita');
			$data['hari'] = $this->input->post('hari');
			$data['tgl'] = $this->input->post('tgl');
			$data['jam'] = $this->input->post('jam');
            $data['gambar'] = $this->input->post('gambar');
			$data['id_user'] = $this->input->post('id_user');
			$this->berita_model->save($data);
			redirect('berita');
		}
		else
		{
			$this->load->view('template/header');
			$this->load->view('berita/tambah');
			$this->load->view('template/footer');
		}
	}
    function edit($id_berita)
	{
		$data['berita'] = $this->berita_model->getById($id_berita);
		$this->load->view("template/header_app");
		$this->load->view("template/sidebar");
		$this->load->view("template/topbar");
		$this->load->view('berita/edit',$data);
		$this->load->view("template/fother_app");
		
	}
    public function update()
	{
		$this->form_validation->set_rules('id_berita','id Berita','required');
		$this->form_validation->set_rules('judul','Judul Berita','required');
		$this->form_validation->set_rules('isi_berita','Isi Berita','required');
		$this->form_validation->set_rules('hari','Hari','required');
		$this->form_validation->set_rules('tgl','Tanggal','required');
		$this->form_validation->set_rules('jam','Jam','required');        
		$this->form_validation->set_rules('gambar','Gambar','required');
		$this->form_validation->set_rules('id_user','Id User','required');
		if ($this->form_validation->run()==true)
        {
		 	$id_berita = $this->input->post('id_berita');
			$data['id_berita'] = $this->input->post('id_berita');
			$data['judul'] = $this->input->post('judul');
			$data['isi_berita'] = $this->input->post('isi_berita');
			$data['hari'] = $this->input->post('hari');
			$data['tgl'] = $this->input->post('tgl');
			$data['jam'] = $this->input->post('jam');           
			$data['gambar'] = $this->input->post('gambar');
			$data['id_user'] = $this->input->post('id_user');
			$this->berita_model->update($data,$id_berita);
			redirect('berita');
		}
		else
		{
			$id_berita = $this->input->post('id_berita');
			$data['berita'] = $this->berita_model->getById($id_berita);
			$this->load->view('template/header');
			$this->load->view('berita/edit',$data);
			$this->load->view('template/footer');
		}
	}
    function delete($id_berita)
	{
		$this->berita_model->delete($id_berita);
		redirect('berita');
	}
}