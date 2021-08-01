<?php defined('BASEPATH') or exit('No direct script access allowed');

class Calon_siswa_model extends CI_Model
{
    private $table = "calon_siswa";

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }
    public function getByEmail($email)
    {
        $query = "SELECT status from calon_siswa join user on calon_siswa.id_user=user.id WHERE email='$email'";;

        $data = $this->db->query($query)->row_array();
        if ($data) {
            return $data['status'];
        } else {
            return null;
        }
    }
    public function update($data, $id)
    {
        return $this->db->update($this->table, $data, array('nisn' => $id));
    }
    public function delete($id)
    {
        return $this->db->delete($this->table, array("nisn" => $id));
    }
    public function uploadfoto()
    {
        $config['upload_path']          = './foto';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
            echo $error['error'];
        } else {
            return $this->upload->data('file_name');
        }
    }
    public function tambah()
    {
        $data = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $lahir = $this->input->post('tempat');
        $tanggal = $this->input->post('tanggal');
        $ttl = $lahir . ' ' . $tanggal;
        $data = [
            'nisn' => $this->input->post('nisn'),
            'foto' => $this->uploadfoto(),
            'nama_lengkap' => $this->input->post('namalengkap'),
            'jenis_kelamin' => $this->input->post('jeniskelamin'),
            'tempat_lahir' => $ttl,
            'agama' => $this->input->post('agama'),
            'alamat' => $this->input->post('alamat'),
            'asal_sekolah' => $this->input->post('asalsekolah'),
            'nama_ayah' => $this->input->post('namaayah'),
            'pend_ayah' => $this->input->post('pendidikanayah'),
            'nama_ibu' => $this->input->post('namaibu'),
            'pend_ibu' => $this->input->post('pendidikanibu'),
            'pekerjaan_ayah' => $this->input->post('pekerjaanayah'),
            'pekerjaan_ibu' => $this->input->post('pekerjaanibu'),
            'penghasilan_ortu' => $this->input->post('penghasilan'),
            'alamat_ortu' => $this->input->post('alamatortu'),
            'no_tlp_ortu' => $this->input->post('notelp'),
            'status' => 'belum aktif',
            'id_user' => $data['id']
        ];
        $data = $this->db->insert($this->table, $data);
        if ($this->db->affected_rows($data) > 0) {
            return true;
        }
    }
    public function biodata()
    {
        // ambil id user berdasarkan user yang login
        $data = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $data['id'];
        return  $this->db->get_where('calon_siswa', ['id_user' => $id])->row_array();
    }
    public function biodataid($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row_array();
    }
    public function editsimpan()
    {
        $ttl = "";
        $id = $this->input->post('id');
        $lahir = $this->input->post('tempat');
        $tanggal = $this->input->post('tanggal');
        if ($lahir && $tanggal) {
            $ttl .= $lahir . ' ' . $tanggal;
        } else {
            $ttl .= $lahir;
        }
        $data = [
            'nisn' => $this->input->post('nisn'),
            'foto' => $this->uploadfotobaru(),
            'nama_lengkap' => $this->input->post('namalengkap'),
            'jenis_kelamin' => $this->input->post('jeniskelamin'),
            'tempat_lahir' => $ttl,
            'agama' => $this->input->post('agama'),
            'alamat' => $this->input->post('alamat'),
            'asal_sekolah' => $this->input->post('asalsekolah'),
            'nama_ayah' => $this->input->post('namaayah'),
            'pend_ayah' => $this->input->post('pendidikanayah'),
            'nama_ibu' => $this->input->post('namaibu'),
            'pend_ibu' => $this->input->post('pendidikanibu'),
            'pekerjaan_ayah' => $this->input->post('pekerjaanayah'),
            'pekerjaan_ibu' => $this->input->post('pekerjaanibu'),
            'penghasilan_ortu' => $this->input->post('penghasilan'),
            'alamat_ortu' => $this->input->post('alamatortu'),
            'no_tlp_ortu' => $this->input->post('notelp')
        ];
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update($this->table);
        return true;
    }
    public function uploadfotobaru()
    {
        if ($_FILES['foto']['name']) {
            return $this->uploadfoto();
        } else {
            return $this->input->post('fotolama');
        }
    }
    public function cetakkartupelajar($email)
    {
        $query = "SELECT nisn, foto,tempat_lahir,nama_lengkap,jurusan,alamat,agama from calon_siswa join user on calon_siswa.id_user=user.id where email='$email'";
        return $this->db->query($query)->row_array();
    }
    public function jurusanByUser($email)
    {
        $data = "SELECT id_user from calon_siswa join user on calon_siswa.id_user=user.id where email='$email'";
        $id = $this->db->query($data)->row_array()['id_user'];
        $query = "SELECT nilai_raport,nilai_uas, nilai_un, nilai_piagam,rata_rata,status, namaJurusan from nilai join jurusan on nilai.id_jurusan=jurusan.id_jurusan where id_calon_siswa=$id";
        $result = $this->db->query($query)->result_array();
        if ($result > 0) {
            return $result;
        } else {
            return true;
        }
    }
    public function getProfile($email)
    {
        $query = "SELECT foto, username from calon_siswa join user on calon_siswa.id_user=user.id where email='$email'";
        return $this->db->query($query)->row_array();
    }
}
