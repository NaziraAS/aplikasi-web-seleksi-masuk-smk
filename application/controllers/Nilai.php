<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("nilai_model");
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['nilai'] = $this->nilai_model->getAll();
        $this->load->view('templates/header');
		$this->load->view('nilai/index',$data);
		$this->load->view('templates/footer');
	}
    public function tambah()
	{
		$this->load->view('template/header');
		$this->load->view('nilai/create');
		$this->load->view('template/footer');
	}
}