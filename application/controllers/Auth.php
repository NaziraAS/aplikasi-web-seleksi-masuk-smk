<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    // Method pertama kali dijalankan secara otomatis
    // Semua fungsi pada halaman ini akan menggunakan method ini
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    // fungsi index untuk login akun
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page'; // men-set title pada tab browser
            $this->load->view('templates/auth_header', $data); // me-load template utk header skaligus membawa data untuk judul pada tab browser
            $this->load->view('auth/login'); // me-load isi atau konten login
            $this->load->view('templates/auth_footer'); // me-load tempalate utk footer
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email    = $this->input->post('email', true);
        $password = $this->input->post('password', true);

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) { // usernya ada di database
            if ($user['level'] == 'admin') { // jika user aktif 
                if (password_verify($password, $user['password'])) { // cek password yang diketik dgn password yg di hash atau encryp
                    $data = [
                        'email'     => $user['email'],
                        'level'   => $user['level']
                    ];
                    $this->session->set_userdata($data);
                    redirect('Admin');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('auth'); // jika password salah
                }
            } elseif ($user['level'] == 'siswa') {
                if (password_verify($password, $user['password'])) { // cek password yang diketik dgn password yg di hash atau encryp
                    $data = [
                        'email'     => $user['email'],
                        'level'   => $user['level']
                    ];
                    $this->session->set_userdata($data);
                    redirect('Calon_siswa');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">User tidak ditemukan!</div>');
                redirect('auth');
            }
        } else { // email belum terdaftar
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Your email is not registred!</div>');
            redirect('auth');
        }
    }

    // fungsi untuk pendaftaran akun baru
    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        // men-set aturan-aturan untuk pendaftaran akun baru
        /* required     = wajib diisi
           trim         = spasi diawal dan diakhir tidak dihitung
           valid_email  = memvalidasi format email
           is_unique    = email satu dengan lainnya tidak boleh sama
           matches['']  = membandingkan kesamaan karakter
         */
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registred!' // menambahkan array untuk fungsi tertentu
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password dont mathc!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Retype-Password', 'required|trim|matches[password1]');

        // jika fungsi ini dijalankan dan hasil inputan salah maka proses akan diulang
        if ($this->form_validation->run() == false) {
            $data['title'] = ' User Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
            // jika fungsi ini dijalankan dan hasil inputan benar maka dilanjutkan ke proses input data ke DATABASE
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('name', true)),
                // enkripsi default oleh CodeIgniter
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'level' => 'siswa',
            ];
            $this->db->insert('user', $data); // menginputkan data ke database
            // jika sesi ini berhasil maka pesan ditampilkan pada Login Page.
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulations! Your account has been created.</div>');
            // mengarahkan ke halaman Login Page.
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout.</div>');
        // mengarahkan ke halaman Login Page.
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }


    // public function index(){
    //     $this->load->view("template/header_app");
    //     $this->load->view("admin/login");
    //     $this->load->view("template/footer");
    // }
    // public function register(){
    //     $this->load->view("template/header_app");
    //     $this->load->view("admin/register");
    //     $this->load->view("template/footer");
    // }
}
