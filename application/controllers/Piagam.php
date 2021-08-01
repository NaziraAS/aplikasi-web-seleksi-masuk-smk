<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Piagam extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("piagam_siswa_model");
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['piagam'] = $this->piagam_siswa_model->getAll();
		$this->load->view("template/header_app");
		$this->load->view("template/sidebar");
		$this->load->view("template/topbar");
		$this->load->view('piagam/index',$data);
		$this->load->view("template/fother_app");
		
	}
    public function tambah()
	{
		
		$this->load->view("template/header_app");
		$this->load->view("template/sidebar");
		$this->load->view("template/topbar");
		$this->load->view('piagam/tambah');
		$this->load->view("template/fother_app");
	}
    public function save()
	{
		$this->form_validation->set_rules('id_piagam','ID Piagam','required');
		$this->form_validation->set_rules('nisn','NISN ','required');
		$this->form_validation->set_rules('nama_piagam','Nama Piagam','required');
		$this->form_validation->set_rules('nilai','Nilai','required');
		$this->form_validation->set_rules('tingkat','Tingkat','required');
		if ($this->form_validation->run()==true)
        {
			$data['id_piagam'] = $this->input->post('id_piagam');
			$data['nisn'] = $this->input->post('nisn');
			$data['nama_piagam'] = $this->input->post('nama_piagam');
			$data['nilai'] = $this->input->post('nilai');
			$data['tingkat'] = $this->input->post('tingkat');
			$this->piagam_siswa_model->save($data);
			redirect('piagam');
		}
		else
		{
			$this->load->view('template/header');
			$this->load->view('piagam/create');
			$this->load->view('template/footer');
		}
	}
    function edit($id_piagam)
	{
		$data['piagam'] = $this->piagam_siswa_model->getById($id_piagam);
		$this->load->view("template/header_app");
		$this->load->view("template/sidebar");
		$this->load->view("template/topbar");
		$this->load->view('piagam/edit',$data);
		$this->load->view("template/fother_app");
	}
    public function update()
	{
		$this->form_validation->set_rules('id_piagam','ID Piagam','required');
		$this->form_validation->set_rules('nisn','NISN','required');
		$this->form_validation->set_rules('nama_piagam','Nama Piagam','required');
		$this->form_validation->set_rules('nilai','Nilai','required');
		$this->form_validation->set_rules('tingkat','Tingkat','required');
		if ($this->form_validation->run()==true)
        {
		 	$id_piagam = $this->input->post('id_piagam');
			$data['id_piagam'] = $this->input->post('id_piagam');
			$data['nisn'] = $this->input->post('nisn');
			$data['nama_piagam'] = $this->input->post('nama_piagam');
			$data['nilai'] = $this->input->post('nilai');
			$data['tingkat'] = $this->input->post('tingkat');
			$this->piagam_siswa_model->update($data,$id_piagam);
			redirect('piagam');
		}
		else
		{
			$id_piagam = $this->input->post('id_piagam');
			$data['piagam'] = $this->piagam_siswa_model->getById($id_piagam);
			$this->load->view('template/header');
			$this->load->view('piagam/edit',$data);
			$this->load->view('template/footer');
		}
	}
    function delete($id_piagam)
	{
		$this->piagam_siswa_model->delete($id_piagam);
		redirect('piagam');
	}
}