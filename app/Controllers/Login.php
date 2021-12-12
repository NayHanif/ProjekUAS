<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;
use App\Models\Pesanan;


class Login extends BaseController
{
    public function index()
    {
        echo view('login_view');
    }

    public function logout(){
        session()->destroy();
        session()->setFlashdata("error","Anda berhasil logout");
        return redirect()->to(base_url('login'));
    }
    public function submitLogin()
    {
        $model = new Users();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $level = $this->request->getVar('level');

        /* $data = $model->where([
            'username'=> $username,
            ])->first(); */
        $data = $model->where('username', $username)->first();

        if($data){
            if(password_verify($password, $data['password'])){
                session()->set([
                    'namadepan' => $data['namadepan'],
                    'namabelakang' => $data['namabelakang'],
                    'logged_in' => TRUE,
                ]);
                //return redirect()->to(base_url('dashboard_view'));
                if($data['level']=='1'){ //Akses admin
                    $model = new Pesanan();
                    $data['pesanan'] = $model->findAll();
                    echo view('view_header.php');
                    #echo view('view_pegawai_list', $data);
 
                 }else{ //akses mahasiswa
                    return view('dashboard_view');
                 }
 
                //return view('dashboard_view');
            }
            else{
                session()->setFlashdata("error","username dan password salah");
                return redirect()->back();
            }
        }
        else{
            session()->setFlashdata("error","username dan password salah");
            return redirect()->back();
        }
    }
    
}
