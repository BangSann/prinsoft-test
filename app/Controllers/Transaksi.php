<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use PhpParser\Node\Stmt\Catch_;

class Transaksi extends BaseController
{
    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }

    public function index()
    {
        $data['produk'] = $this->produkModel->findAll();
        return view('transaksi/index', $data);
    }

    public function create($id)
    {
        try {

            $data['produk'] = $this->produkModel->find($id);
            return view('transaksi/createTransaksi', $data);
        } catch (\Exception $e) {
            echo 'error: ' . $e->getMessage();
            // return redirect()->to('/login');
        }
    }
}
