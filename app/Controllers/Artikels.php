<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Artikel;

class Artikels extends BaseController
{
    public function index()
    {
        if (session()->get('logged_in')){
            //Menampilkan data users
            $model = new Artikel();
            $data['Artikel'] = $model->findAll();
            echo view('view_header.php');
            echo view('view_artikel_list', $data);
        }
        else{
            echo "Invalid";
            return redirect()->to(base_url('/login'))->with('error', "Invalid Credential");
        }
    }

    public function hapus($id){
        $model = new Artikel();
        $model->delete($id);
        return redirect()->to('/artikels');
    }
}
