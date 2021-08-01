<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_ulang extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("daftar_ulang_model");
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['daftar_ulang'] = $this->daftar_ulang_model->getAll();
		$this->load->view("template/header_app");
		$this->load->view("template/sidebar");
		$this->load->view("template/topbar");
		$this->load->view('daftar_ulang/index',$data);
		$this->load->view("template/fother_app");
	}
	public function tambah()
	{
		$this->load->view("template/header_app");
		$this->load->view("template/sidebar");
		$this->load->view("template/topbar");
		$this->load->view('daftar_ulang/tambah');
		$this->load->view("template/fother_app");
	}
	public function save()
	{
		$this->form_validation->set_rules('id_daftarulang','ID Daftar Ulang','required');
		$this->form_validation->set_rules('nisn','NISN Siswa','required');
		$this->form_validation->set_rules('tanggal','Tanggal ','required');
		$this->form_validation->set_rules('jam','Jam','required');
		if ($this->form_validation->run()==true)
        {
			$data['id_daftarulang'] = $this->input->post('id_daftarulang');
			$data['nisn'] = $this->input->post('nisn');
			$data['tanggal'] = $this->input->post('tanggal');
			$data['jam'] = $this->input->post('jam');
			$this->daftar_ulang_model->save($data);
			redirect('daftar_ulang');
		}
		else
		{
			$this->load->view('template/header');
			$this->load->view('daftar_ulang/tambah');
			$this->load->view('template/footer');
		}
	}
	function edit($id_daftarulang)
	{
		$data['daftar_ulang'] = $this->daftar_ulang_model->getById($id_daftarulang);
		$this->load->view('template/header');
		$this->load->view('daftar_ulang/edit',$data);
		$this->load->view('template/footer');
	}
	public function update()
	{
		$this->form_validation->set_rules('id_daftarulang','ID Daftar Ulang','required');
		$this->form_validation->set_rules('nisn','NISN','required');
		$this->form_validation->set_rules('tanggal','Tanggal','required');
		$this->form_validation->set_rules('jam','Jam','required');
		if ($this->form_validation->run()==true)
        {
		 	$id_daftarulang = $this->input->post('id_daftarulang');
			$data['id_daftarulang'] = $this->input->post('id_daftarulang');
			$data['nisn'] = $this->input->post('nisn');
			$data['tanggal'] = $this->input->post('tanggal');
			$data['jam'] = $this->input->post('jam');
			$this->daftar_ulang_model->update($data,$id_daftarulang);
			redirect('daftar_ulang');
		}
		else
		{
			$id_daftarulang = $this->input->post('id_daftarulang');
			$data['daftar_ulang'] = $this->daftar_ulang_model->getById($id_daftarulang);
			$this->load->view('template/header');
			$this->load->view('daftar_ulang/edit',$data);
			$this->load->view('template/footer');
		}
	}
	function delete($id_daftarulang)
	{
		$this->daftar_ulang_model->delete($id_daftarulang);
		redirect('daftar_ulang');
	}
}