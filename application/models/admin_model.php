<?php defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    private $table = "nilai";

    public function getAll()
    {
        return $this->db->get('calon_siswa')->result_array();
    }
    public function simpan()
    {
        $data = [
            's_penilaian' => $this->input->post('n_ratarata'),
            'id_jurusan' => $this->input->post('idjurusan')
        ];
        $this->db->insert('standar_penilaian', $data);
        if ($this->db->affected_rows('standar_penilain') > 0) {
            return true;
        }
    }
    public function getAllSiswa($number, $offset)
    {
        return $this->db->get('calon_siswa', $number, $offset)->result_array();
    }
    public function getAllDataSiswa()
    {
        return $this->db->get('calon_siswa')->num_rows();
    }
    public function editsiswa($id)
    {
        return $this->db->get_where('calon_siswa', ['id' => $id])->row_array();
    }
    public function editsave()
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
            'status' => $this->input->post('status'),
            'jurusan' => $this->input->post('jurusan'),
            'no_tlp_ortu' => $this->input->post('notelp')
        ];
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('calon_siswa');
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
    public function detailsiswa($id)
    {
        return $this->db->get_where('calon_siswa', ['id' => $id])->row_array();
    }
    public function getAllLaporan($number, $offset)
    {
        return $this->db->get('calon_siswa', $number, $offset)->result_array();
    }
    public function getAllLaporanrows()
    {
        return $this->db->get('calon_siswa')->num_rows();
    }
    public function getProfile($email)
    {
        $query = "SELECT username from user where email='$email'";
        return $this->db->query($query)->row_array();
    }
}
