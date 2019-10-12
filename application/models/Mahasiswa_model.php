<?php

class Mahasiswa_model extends CI_Model
{
    public function getAllMahasiswa()
    {
        return $this->db->get_where('mahasiswa')->result_array();
    }
}
