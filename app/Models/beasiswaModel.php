<?php

namespace App\Models;

use CodeIgniter\Model;

class beasiswaModel extends Model
{
    protected $table = 'tbl_beasiswa'; 
    protected $allowedFields = ['nama_beasiswa', 'deskripsi'];

    public function get_data($nama_beasiswa, $deskripsi)
    {
        return $this->db->table('tbl_beasiswa')
            ->where(['nama_beasiswa' => $nama_beasiswa, 'deskripsi' => $deskripsi])
            ->get()
            ->getRowArray();
    }
}
