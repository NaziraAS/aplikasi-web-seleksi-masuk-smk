<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kartu_pelajar_model extends CI_Model
{
    private $table = "kartu_pelajar";

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id_kartu_siswa" => $id])->row();
    }
    public function update($data,$id)
    {
        return $this->db->update($this->table, $data, array('id_kartu_siswa' => $id));
    }
    public function delete($id)
    {
        return $this->db->delete($this->table, array("id_kartu_siswa" => $id));
    }
}