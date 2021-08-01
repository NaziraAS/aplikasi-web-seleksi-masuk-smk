<?php

class Admin extends CI_Controller
{
	public $email;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model', 'admin');
		$this->email = $this->session->userdata('email');
	}
	public function index()
	{
		$data['privilage'] = $this->admin->getProfile($this->email);
		$jumlahdata = $this->admin->getAllDataSiswa();
		$config = [
			'base_url' => base_url() . 'Admin/index',
			'total_rows' => $jumlahdata,
			'per_page' => 2,
			'attributes' => [
				'class' => 'btn btn-primary ml-1'
			],
			'cur_tag_open' => '<button class="btn btn-danger">',
			'cur_tag_close' => '</button>'
		];
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['siswa'] = $this->admin->getAllSiswa($config['per_page'], $from);
		$this->load->view("templates/header_app");
		$this->load->view("templates/sidebar");
		$this->load->view("templates/topbar", $data);
		$this->load->view('admin/index', $data);
		$this->load->view("templates/fother_app");
	}
	public function editsiswa($id)
	{
		$data['privilage'] = $this->admin->getProfile($this->email);
		$data['profile'] = $this->admin->editsiswa($id);
		$this->load->view("templates/header_app");
		$this->load->view("templates/sidebar");
		$this->load->view("templates/topbar", $data);
		$this->load->view('admin/edit', $data);
		$this->load->view("templates/fother_app");
	}
	public function editsiswasave()
	{
		if ($this->admin->editsave()) {
			redirect('admin');
		}
	}
	public function detail($id)
	{
		$data['privilage'] = $this->admin->getProfile($this->email);
		$data['siswa'] = $this->admin->detailsiswa($id);
		$this->load->view("templates/header_app");
		$this->load->view("templates/sidebar");
		$this->load->view("templates/topbar", $data);
		$this->load->view('admin/detail', $data);
		$this->load->view("templates/fother_app");
	}
	public function standar_penilaian()
	{
		$data['privilage'] = $this->admin->getProfile($this->email);
		$data['jurusan'] = $this->db->get('jurusan')->result_array();
		$this->load->view("templates/header_app");
		$this->load->view("templates/sidebar");
		$this->load->view("templates/topbar", $data);
		$this->load->view('admin/standar_penilaian', $data);
		$this->load->view("templates/fother_app");
	}
	public function save()
	{
		$this->form_validation->set_rules('n_ratarata', 'rata rata', 'required');


		if ($this->form_validation->run() == true) {
			$data = $this->admin->simpan();
			if ($data == true) {
				echo "<script>
					alert('data berhasil di simpan');
				</script>
				";
				redirect('admin/standar_penilaian');
			}
		} else {
			// $this->load->view('templates/header');
			// $this->load->view('admin/standar_penilaian');
			// $this->load->view('templates/footer');
			$this->standar_penilaian();
		}
	}
	public function laporan()
	{
		$data['privilage'] = $this->admin->getProfile($this->email);
		$jumlahdata = $this->admin->getAllLaporanrows();
		$config = [
			'base_url' => base_url() . 'Admin/laporan',
			'total_rows' => $jumlahdata,
			'per_page' => 10,
			'attributes' => [
				'class' => 'btn btn-primary ml-1'
			],
			'cur_tag_open' => '<button class="btn btn-danger">',
			'cur_tag_close' => '</button>'
		];
		$from = $this->uri->segment($config['total_rows']);
		$this->pagination->initialize($config);
		$data['laporan'] = $this->admin->getAllLaporan($config['per_page'], $from);
		if ($data['laporan'] > 0) {
			$this->load->view("templates/header_app");
			$this->load->view("templates/sidebar");
			$this->load->view("templates/topbar", $data);
			$this->load->view('admin/laporan', $data);
			$this->load->view("templates/fother_app");
		} else {
			$this->load->view("templates/header_app");
			$this->load->view("templates/sidebar");
			$this->load->view("templates/topbar", $data);
			$this->load->view('error/display_error');
			$this->load->view("templates/fother_app");
		}
	}
	public function cetaklaporan()
	{
		if ($data['siswa'] = $this->admin->getAll()) {
			$this->load->view("templates/header_app");
			$this->load->view('admin/cetak', $data);
		}
	}
}
