<?php

class Mahasiswa_model extends CI_Model
{
    public function getAllMahasiswa()
    {
        return $this->db->get_where('mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "nama" => htmlspecialchars($_POST['nama'], true),
            "nrp" => htmlspecialchars($_POST['nrp'], true),
            "email" => htmlspecialchars($_POST['email'], true),
            "jurusan" => htmlspecialchars($_POST['jurusan'], true),
        ];
        $this->db->insert('mahasiswa', $data);
    }

    public function hapusDataMahasiswa($id)
    {
        $this->db->delete('mahasiswa', ['id' => $id]);
    }
}
