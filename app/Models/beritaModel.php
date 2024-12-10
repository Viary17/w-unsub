<?php

namespace App\Models;

use CodeIgniter\Model;

class beritaModel extends Model
{
    protected $table = 'tbl_berita'; 
    protected $allowedFields = ['judul_berita', 'deskripsi', 'tanggal', 'gambar', 'kategori']; 

    public function get_data($judul_berita, $deskripsi, $tanggal, $gambar, $kategori)
    {
        return $this->db->table($this->table)
            ->where([
                'judul_berita' => $judul_berita,
                'deskripsi' => $deskripsi,
                'tanggal' => $tanggal,
                'gambar' => $gambar,
                'kategori' => $kategori
            ])
            ->get()
            ->getRowArray();
    }
}
