<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BarangSeeder extends Seeder
{
	public function run()
	{
		$data = [
					[
					'nama_barang' 	=> 'Jeruk Mandarin',
					'jenis_barang'	=> 'Buah-buahan',
					'harga'    		=> '59900',
					'keterangan'    => 'Jeruk mandarin murah dijamin manis rasanya',
					'gambar'    	=> 'jerummandarin.jpg'
					],
					[
					'nama_barang' 	=> 'Melon Klimanjaro',
					'jenis_barang'	=> 'Buah-buahan',
					'harga'    		=> '45000',
					'keterangan'    => 'Melon segar dipetik dari kebun pribadi',
					'gambar'    	=> 'melon.jpgp'
					]
				];

	// Using Query Builder
	$this->db->table('barang')->insertBatch($data);
	}
}
