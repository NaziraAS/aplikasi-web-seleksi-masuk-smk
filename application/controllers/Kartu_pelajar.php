<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kartu_pelajar extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("kartu_pelajar_model");
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['kartu_pelajar'] = $this->kartu_pelajar_model->getAll();
		$this->load->view("template/header_app");
		$this->load->view("template/sidebar");
		$this->load->view("template/topbar");
		$this->load->view('kartu_pelajar/index',$data);
		$this->load->view("template/fother_app");
	}
    public function tambah()
	{
		$this->load->view("template/header_app");
		$this->load->view("template/sidebar");
		$this->load->view("template/topbar");
		$this->load->view('kartu_pelajar/tambah');
		$this->load->view("template/fother_app");
		
	}
    public function save()
	{
		$this->form_validation->set_rules('id_kartu_siswa','Nama','required');
		$this->form_validation->set_rules('id_nisn','Jenis Kelamin','required');
		if ($this->form_validation->run()==true)
        {
			$data['id_kartu_siswa'] = $this->input->post('id_kartu_siswa');
			$data['id_nisn'] = $this->input->post('id_nisn');
			$this->kartu_pelajar_model->save($data);
			redirect('kartu_pelajar');
		}
		else
		{
			$this->load->view('template/header');
			$this->load->view('kartu_pelajar/tambah');
			$this->load->view('template/footer');
		}
	}
    function edit($id_kartu_siswa)
	{
		$data['kartu_pelajar'] = $this->kartu_pelajar_model->getById($id_kartu_siswa);
		
		
		$this->load->view("template/header_app");
		$this->load->view("template/sidebar");
		$this->load->view("template/topbar");
		$this->load->view('kartu_pelajar/edit',$data);
		$this->load->view("template/fother_app");
	}
    public function update()
	{
		$this->form_validation->set_rules('id_kartu_siswa','ID Kartu Siswa','required');
		$this->form_validation->set_rules('id_nisn','ID NISN ','required');
		if ($this->form_validation->run()==true)
        {
		 	$id_kartu_siswa = $this->input->post('id_kartu_siswa');
			$data['id_kartu_siswa'] = $this->input->post('id_kartu_siswa');
			$data['id_nisn'] = $this->input->post('id_nisn');
			$this->kartu_pelajar_model->update($data,$id_kartu_siswa);
			redirect('kartu_pelajar');
		}
		else
		{
			$id_kartu_siswa = $this->input->post('id_kartu_siswa');
			$data['kartu_pelajar'] = $this->kartu_pelajar_model->getById($id_kartu_siswa);
			$this->load->view('template/header');
			$this->load->view('kartu_pelajar/edit',$data);
			$this->load->view('template/footer');
		}
	}
    function delete($id_kartu_siswa)
	{
		$this->kartu_pelajar_model->delete($id_kartu_siswa);
		redirect('kartu_pelajar');
	}
}