<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelKategori;

class Kategori extends BaseController
{
    private $ModelKategori;

    public function __construct() 
    {
        helper('form');
        $this->ModelKategori = new ModelKategori;
    }

    public function index()
    {
        $data = [
            'judul' => 'Kategori',
            'page' => 'v_kategori',
            'kategori' => $this->ModelKategori->AllData(),
        ];
        return view('v_template_admin', $data);
    }

    public function Add()
    {
        $data = ['nama_kategori' => $this->request->getPost('nama_kategori')];
        $this->ModelKategori->Add($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan !');
        return redirect()->to(base_url('Kategori'));
    }
}
