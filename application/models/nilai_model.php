<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_model extends CI_Model
{
    private $table = "nilai";

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }
}