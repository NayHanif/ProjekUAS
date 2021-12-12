<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;

class Pegawai extends BaseController
{
    public function index()
    {
        if (session()->get('logged_in')){
            //Menampilkan data users
            $model = new Users();
                    $data['Users'] = $model->findAll();
                    echo view('view_header.php');
                    echo view('view_users_list', $data);
        }
        else{
            echo "Invalid";
            return redirect()->to(base_url('/login'))->with('error', "Invalid Credential");
        }
    }

}
