<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
    protected $table = 'tbl_agenda'; 
    protected $allowedFields = ['nama_acara', 'deskripsi', 'tanggal', 'tempat', 'penyelenggara'];

    public function get_data($nama_acara, $deskripsi, $tanggal, $tempat, $penyelenggara)
    {
        return $this->db->table('tbl_agenda')
            ->where(['nama_acara' => $nama_acara, 'deskripsi' => $deskripsi, 'tanggal' => $tanggal, 'tempat'=> $tempat, 'penyelenggara' => $penyelenggara])
            ->get()
            ->getRowArray();
    }
}
