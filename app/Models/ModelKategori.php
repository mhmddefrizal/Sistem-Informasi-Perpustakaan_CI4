<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKategori extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_kategori')
            ->orderBy('id_kategori', 'DESC')
            ->get()->getResultArray();
    }

    public function Add($data)
    {
        $this->db->table('tbl_kategori')->insert($data);
    }
}
