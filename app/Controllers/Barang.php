<?php


namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController
{
  protected $barangModel;
  public function __construct()
  {
    $this->barangModel = new BarangModel();
  }

  public function index()
  {

    $barang = $this->barangModel->findAll();

    $data = [

      'title' => 'Daftar Barang',
      'subTitle' => 'Barang',
      'barang' => $barang
    ];

    return view('barang/index', $data);
  }



  public function create()
  {

    $data = [
      'title' => 'Form Tambah Barang',
      'subTitle' => 'Barang'
    ];

    return view('barang/create', $data);
  }

  public function save()
  {

    // ambil gambar

    $fileGambar = $this->request->getFile('gambar');

    // pindahkan ke folder img

    $fileGambar->move('images');

    // ambil nama file gambar artikel

    $namaFileGambar = $fileGambar->getName();


    $this->barangModel->save([

      'nama_barang' => $this->request->getVar('nama_barang'),
      'jenis_barang' => $this->request->getVar('jenis_barang'),
      'harga' => $this->request->getVar('harga'),
      'keterangan' => $this->request->getVar('keterangan'),
      'gambar' => $namaFileGambar
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

    return redirect()->to('/barang');
  }

  public function delete($id_barang)
  {

    $this->barangModel->delete($id_barang);
    session()->setFlashdata('pesan', 'Data berhasil dihapus.');

    return redirect()->to('/barang');
  }

  public function edit($id_barang)
  {

    $data = [
      'title' => 'Form Ubah Barang',
      'subTitle' => 'Barang',
      'barang' => $this->barangModel->getBarang($id_barang)
    ];

    return view('barang/edit', $data);
  }


  public function update($id_barang)
  {
    $fileGambar = $this->request->getFile('gambar');

    // cek gambar, apakah tetap gambar lama

    if ($fileGambar->getError() == 4) {
      $namaGambar = $this->request->getVar('gambarLama');
    } else {

      // generate nama file random

      $namaGambar = $fileGambar->getRandomName();

      // pindahkan gambar 

      $fileGambar->move('images', $namaGambar);
    }

    
    $this->barangModel->save([
      'id_barang' => $id_barang,
      'nama_barang' => $this->request->getVar('nama_barang'),
      'jenis_barang' => $this->request->getVar('jenis_barang'),
      'harga' => $this->request->getVar('harga'),
      'keterangan' => $this->request->getVar('keterangan'),
      'gambar' => $namaGambar
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

    return redirect()->to('/barang');
  }
}
