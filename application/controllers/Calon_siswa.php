<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Calon_siswa extends CI_Controller
{
	protected $status = 1;
	public $email;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Calon_siswa_model');
		$this->load->model('admin_model', 'admin');
		$this->email = $this->session->userdata('email');
	}

	public function index()
	{
		$data['privilage'] = $this->Calon_siswa_model->getProfile($this->email);
		$data['profile'] = $this->Calon_siswa_model->biodata();
		if ($data['profile']) {
			$this->load->view("templates/header_app");
			$this->load->view("templates/sidebar", $data);
			$this->load->view("templates/topbar", $data);
			$this->load->view('calon_siswa/index', $data);
			$this->load->view("templates/fother_app");
		} else {
			$this->load->view("templates/header_app");
			$this->load->view("templates/sidebar", $data);
			$this->load->view("templates/topbar", $data);
			$this->load->view('calon_siswa/error');
			$this->load->view("templates/fother_app");
		}
	}
	public function editprofile($id)
	{

		$data['privilage'] = $this->Calon_siswa_model->getProfile($this->email);
		$data['profile'] = $this->Calon_siswa_model->biodataid($id);
		// var_dump($data['profile']);
		// die;	
		$this->load->view("templates/header_app");
		$this->load->view("templates/sidebar", $data);
		$this->load->view("templates/topbar", $data);
		$this->load->view('calon_siswa/editprofile', $data);
		$this->load->view("templates/fother_app");
	}
	function editsimpan()
	{
		if ($this->Calon_siswa_model->editsimpan() == true) {
			redirect('calon_siswa');
		}
	}
	public function tambah()
	{
		$data['privilage'] = $this->Calon_siswa_model->getProfile($this->email);
		$this->form_validation->set_rules('nisn', 'Nisn', 'required');
		$this->form_validation->set_rules('namalengkap', 'Nama lengkap', 'required');
		$this->form_validation->set_rules('jeniskelamin', 'Jenis kelamin', 'required');
		$this->form_validation->set_rules('tempat', 'Tempat', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('asalsekolah', 'Asal sekolah', 'required');
		$this->form_validation->set_rules('namaayah', 'Nama ayah', 'required');
		$this->form_validation->set_rules('pendidikanayah', 'Pendidikan ayah', 'required');
		$this->form_validation->set_rules('pekerjaanayah', 'Pekerjaan ayah', 'required');
		$this->form_validation->set_rules('namaibu', 'Nama ibu', 'required');
		$this->form_validation->set_rules('pendidikanibu', 'Pendidikan ibu', 'required');
		$this->form_validation->set_rules('pekerjaanibu', 'Pekerjaan ibu', 'required');
		$this->form_validation->set_rules('alamatortu', 'Alamat orang tua', 'required');
		$this->form_validation->set_rules('notelp', 'No handphone', 'required');
		$this->form_validation->set_rules('penghasilan', 'Penghasilan', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view("templates/header_app");
			$this->load->view("templates/sidebar", $data);
			$this->load->view("templates/topbar", $data);
			$this->load->view('calon_siswa/tambah', $data);
			$this->load->view("templates/fother_app");
		} else {
			if ($this->Calon_siswa_model->tambah()) {
				redirect('Calon_siswa');
			}
		}
	}
	function delete($nisn)
	{
		$this->calon_siswa_model->delete($nisn);
		redirect('calon_siswa');
	}
	public function standar_penilaian_siswa()
	{
		$data['privilage'] = $this->Calon_siswa_model->getProfile($this->email);
		$data['jurusan'] = $this->db->get('jurusan')->result_array();
		$this->load->view("templates/header_app");
		$this->load->view("templates/sidebar");
		$this->load->view("templates/topbar", $data);
		$this->load->view('calon_siswa/standar_penilaian', $data);
		$this->load->view("templates/fother_app");
	}
	// ambil nilai berdasarkan jurusan dengan ajax
	public function getNilai($id)
	{
		$data = $this->db->get_where('jurusan', ['id_jurusan' => $id])->row_array();
	}
	// fungsi cek nilai
	public function cekNilai()
	{

		$iduser = $this->db->get_where('user', ['email' => $this->email])->row_array()['id'];
		$id = $this->input->post('idjurusan');
		$data = $this->db->get_where('standar_penilaian', ['id_jurusan' => $id])->result_array()[0];
		$total = 0;
		$inputrapot = $this->input->post('nilai_rapot');
		$inputuas = $this->input->post('nilai_uas');
		$inputun = $this->input->post('nilai_un');
		$inputinternasional = $this->input->post('internasioanl');
		$inputnasional = $this->input->post('nasional');
		$inputprovinsi = $this->input->post('provinsi');
		$inputkabupaten = $this->input->post('kabupaten');
		$inputkecamatan = $this->input->post('kecamatan');
		$piagam = (($inputinternasional * 5.70) + ($inputnasional * 5.00) + ($inputprovinsi * 4.5) + ($inputkabupaten * 3.5) + ($inputkecamatan * 3.0)) / 4;
		if ($piagam == '') {
			$total += ($inputrapot + $inputuas + $inputun) / 3;
		} else {
			$total += ($inputrapot + $inputuas + $inputun + $piagam) / 4;
		}
		if (
			$total > $data['s_penilaian']
		) {
			$status = "Lulus";
			$data = [
				'nilai_raport' => $inputrapot,
				'nilai_uas' => $inputuas,
				'nilai_un' => $inputun,
				'nilai_piagam' => $piagam,
				'rata_rata' => $total,
				'status' => $status,
				'id_jurusan' => $id,
				'id_calon_siswa' => $iduser
			];
			$this->db->insert('nilai', $data);
			redirect('Calon_siswa/standar_penilaian_siswa');
		} else {
			$status = "Tidak Lulus";
			$data = [
				'nilai_raport' => $inputrapot,
				'nilai_uas' => $inputuas,
				'nilai_un' => $inputun,
				'nilai_piagam' => $piagam,
				'rata_rata' => $total,
				'status' => $status,
				'id_jurusan' => $id,
				'id_calon_siswa' => $iduser
			];
			$this->db->insert('nilai', $data);
			redirect('Calon_siswa/standar_penilaian_siswa');
		}
	}
	public function hasilNilai()
	{
		if ($data['hasil'] = $this->Calon_siswa_model->jurusanByUser($this->email)) {
			$data['privilage'] = $this->Calon_siswa_model->getProfile($this->email);
			// $data['jurusan'] = $this->db->get('jurusan')->result_array();

			// var_dump($data['jurusan']);
			// die;
			$this->load->view("templates/header_app");
			$this->load->view("templates/sidebar");
			$this->load->view("templates/topbar", $data);
			$this->load->view('calon_siswa/hasil', $data);
			$this->load->view("templates/fother_app");
		} else {
			$data['privilage'] = $this->Calon_siswa_model->getProfile($this->email);
			$this->load->view("templates/header_app");
			$this->load->view("templates/sidebar");
			$this->load->view("templates/topbar", $data);
			$this->load->view('error/display_error');
			$this->load->view("templates/fother_app");
		}
	}
	public function sendmail()
	{
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smpt_user' => 'Jaddihtanh@gmail.com',
			'smtp_pass' => 'jaddih123',
			'smtp_port' => 465,
			'mailtype' => 'text',
			'charset' => 'utf-8'
		];
		$this->load->library('email', $config);
		$message = `<h3>Selamat Datang @nama peserta yg lulus</h3>

		<h4>PENGUMUMAN KELULUSAN</h4>


		Selamat Anda dinyatakan LULUS Dalam proses Seleksi Penerimaan Siswa Baru Di Sekolah Menengah Kejuruan Negeri 1 Banggai. 

		Untuk itu silahkan Melakukan Registrasi Berkas Pada tanggal  15 Juni 2022 di Sekretariat Panitia Penerimaan Siswa Baru Di SMK negeri 1 Banggai. 

		Adapun berkas yang Perlu di Lengkapi adalah sebagai berikut. 

		<ol>

		<li>BUKTI PENDAFTARAN ONLINE ( Email)</li> 

		<li>FOTO COPY AKTA KELAHIRAN 1</li>
		<li>FOTO COPY KARTU KELUARGA (KK) / SURAT KETERANGAN DOMISILI 1 </li>
		<li>PAS FOTO 3X4 LATAR BELAKANG MERAH = 3 LEMBAR</li>
		<li>FOTO COPY LEGALISIR SKL 1 LEMBAR DAN SKL ASLi</li>
		<li>FOTO COPY Nilai rata rata raport  ( terlegalisir) </li>
		<li>FOTO COPY Nilai rata rata UAS ( terlegalisir)</li> 
		<li>FOTO COPY Nilai rata rata UN ( terlegalisir)</li> 
		<li>FOTO COPY SERTIFIKAT/PIAGAM PRESTASI 1 LEMBAR DAN MENUNJUKKAN YANG ASLI (BAGI PENDAFTAR ONLINE YG MELAMPIRKAN SERTIFIKAT/PIAGAM)</li>
		<li>SEMUA DOKUMEN DI MASUKKAN KE DALAM MAP</li>
		<ol type="a">
		<li>TKJ MAP BERWARNA BIRU</li>
		<li>RPL MAP BERWARNA KUNING</li>
		<li>TSM MAP BERWARNA MERAH</li>
		<li>TGB MAP BERWARNA HIJAU</li>
		</ol>

		</ol>

		PENDAFTARAN ULANG DILAKSANAKAN PADA JADWAL YANG TELAH DITETAPKAN DAN BAGI CALON PESERTA DIDIK BARU YANG TIDAK MENDAFTAR ULANG PADA JADWAL YANG DITETAPKAN DIANGGAP "MENGUNDURKAN DIRI" Terima kasih`;
		$email = $this->session->userdata('email');
		$this->email->set_newline("\r\n");

		$this->email->from('Jaddihtanh@gmail.com', 'Mujad');
		$this->email->to('sasmitaatang4@gmail.com');

		$this->email->subject('tes');
		$this->email->message("hello world");

		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}
	public function kartupelajar()
	{
		$email = $this->session->userdata('email');
		$data['privilage'] = $this->Calon_siswa_model->getProfile($this->email);
		$status = $this->Calon_siswa_model->getByEmail($this->session->userdata('email'));
		$data['kartu'] = $this->Calon_siswa_model->cetakkartupelajar($email);
		// var_dump($data['kartu']);
		// die;
		if ($status == 'aktif') {
			$this->load->view("templates/header_app");
			$this->load->view("templates/sidebar");
			$this->load->view("templates/topbar", $data);
			$this->load->view('calon_siswa/kartupelajar', $data);
			$this->load->view("templates/fother_app");
		} else {
			$this->load->view("templates/header_app");
			$this->load->view("templates/sidebar");
			$this->load->view("templates/topbar", $data);
			$this->load->view('calon_siswa/kp_not_found');
			$this->load->view("templates/fother_app");
		}
	}
	public function cetakkp()
	{
		$data['kartu'] = $this->Calon_siswa_model->cetakkartupelajar($this->email);
		$this->load->view("templates/header_app");
		$this->load->view("calon_siswa/cetak", $data);
		$this->load->view("templates/footer_print");
	}
}
