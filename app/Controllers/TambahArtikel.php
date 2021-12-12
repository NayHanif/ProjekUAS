<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Artikel;

class TambahArtikel extends BaseController
{
    public function index()
    {
        if (session()->get('logged_in')){
            //Menampilkan data users
            echo view('view_header.php');
            echo view('view_artikel_tambah');
        }
        else{
            echo "Invalid";
            return redirect()->to(base_url('/login'))->with('error', "Invalid Credential");
        }
    }
}
