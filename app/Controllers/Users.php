<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pesanan;

class Users extends BaseController
{
    public function index()
    {
        if (session()->get('logged_in')) {
            //Menampilkan data users
            $model = new Pesanan();
            $data['pesanan'] = $model->findAll();
            echo view('view_header.php');
            echo view('view_pegawai_list', $data);
        } else {
            echo "Invalid";
            return redirect()->to(base_url('/login'))->with('error', "Invalid Credential");
        }
    }

    public function edit($username)
    {
        $status = 'Terpenuhi';
        $model = new Pesanan();
        $model->set('status', $status);
        $model->where('username', $username);
        $model->update();

        return redirect()->to('/users');
    }
}
