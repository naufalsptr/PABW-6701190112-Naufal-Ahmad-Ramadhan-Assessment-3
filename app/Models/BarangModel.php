<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id_barang';
    protected $allowedFields = ['nama_barang', 'jenis_barang', 'harga', 'keterangan', 'gambar'];

    public function getBarang($barang = false)
    {

        if ($barang == false) {
            return $this->findAll();
        }

        return $this->where(['id_barang' => $barang])->first();
    }
}