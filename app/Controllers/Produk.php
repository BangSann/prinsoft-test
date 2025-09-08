<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Produk extends BaseController
{
    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }

    // Menampilkan semua produk
    public function index()
{
    $keyword = $this->request->getGet('searchProdukParams');
    if ($keyword) {
        $data['produk'] = $this->produkModel
            ->like('nama', $keyword)
            ->orLike('kategori', $keyword)
            ->findAll();
    } else {
        $data['produk'] = $this->produkModel->findAll();
    }

    $data['keyword'] = $keyword;
    return view('produk/index', $data);
}


    // Form tambah produk
    public function create()
    {
        return view('produk/create');
    }

    // Simpan produk baru
    public function store()
    {
        $this->produkModel->save([
            'nama'          => $this->request->getPost('nama'),
            'kategori'      => $this->request->getPost('kategori'),
            'jenis_formula' => $this->request->getPost('jenis_formula'),
            'satuan'        => $this->request->getPost('satuan'),
            'deskripsi'     => $this->request->getPost('deskripsi'),
        ]);

        return redirect()->to('/produk');
    }

    // Form edit produk
    public function edit($id)
    {
        $data['produk'] = $this->produkModel->find($id);
        return view('produk/edit', $data);
    }

    // Update produk
    public function update($id)
    {
        $this->produkModel->update($id, [
            'nama'          => $this->request->getPost('nama'),
            'kategori'      => $this->request->getPost('kategori'),
            'jenis_formula' => $this->request->getPost('jenis_formula'),
            'satuan'        => $this->request->getPost('satuan'),
            'deskripsi'     => $this->request->getPost('deskripsi'),
        ]);

        return redirect()->to('/produk');
    }

    // Hapus produk
    public function delete($id)
    {
        $this->produkModel->delete($id);
        return redirect()->to('/produk');
    }
}
