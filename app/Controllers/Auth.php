<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\UserModel;

class Auth extends BaseController
{
  protected $userModel, $authModel, $validation, $session;

  public function __construct()
  {
    $this->authModel = new AuthModel();
    $this->userModel = new UserModel();
    $this->validation = \Config\Services::validation();
    $this->session = session();
  }

  public function register()
  {
    if (!$this->validate([
      'username' => [
        'rules' => 'required|is_unique[users.username]',
        'errors' => [
          'required' => '{field} harus diisi',
          'is_unique' => '{field} sudah digunakan',
        ]
      ],
      'namadepan' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi',
        ]
      ],
      'password' => [
        'rules' => 'required|min_length[5]|max_length[10]',
        'errors' => [
          'required' => '{field} harus diisi',
          'min_length' => '{field} kurang dari 5',
          'max_length' => '{field} lebih dari 10',
        ]
      ],
      'cpassword' => [
        'rules' => 'required|matches[password]',
        'errors' => [
          'required' => '{field} harus diisi',
          'matches' => 'Tidak sesuai dengan password',
        ]
      ],
      'namabelakang' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi',
        ]
      ],
      'nomorhp' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi'
        ]
      ],
      'alamat' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi'
        ]
      ]
    ])) {
      return redirect()->to(base_url('/register'))->withInput()->with('validation', $this->validation);
    }

    $password = $this->request->getVar('password');
    $cpassword = $this->request->getVar('cpassword');

    if (strcmp($password, $cpassword) == 0) {
      $this->userModel->insert([
        'username' => $this->request->getVar('username'),
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'namadepan' => $this->request->getVar('namadepan'),
        'namabelakang' => $this->request->getVar('namabelakang'),
        'level' => 2,
        'jumlahtukar' => 0,
        'nomorhp' => $this->request->getVar('nomorhp'),
        'alamat' => $this->request->getVar('alamat'),
      ]);
    }

    $this->session->setFlashdata('pesan', 'Akun berhasil dibuat.');
    return redirect()->to(base_url('/login'))->withInput();
  }

  public function login()
  {
    $tbl = 'users';
    $username = $this->request->getVar('username');
    $password = $this->request->getVar('password');
    $row = $this->authModel->getLogin($username, $tbl);

    if ($row == NULL) {
      $this->session->setFlashdata('error', 'Username tidak ditemukan.');
      return redirect()->to(base_url('/login'))->withInput();
    }

    if (password_verify($password, $row->password)) {
      $this->session->set([
        'logged_in' => TRUE,
        'username' => $row->username,
        'level' => $row->level
      ]);

      $this->session->setFlashdata('pesan', 'Login berhasil!');
      return redirect()->to(base_url('/dashboard/' . $username));
    }

    $this->session->setFlashdata('error', 'Password salah');
    return redirect()->to(base_url('/login'))->withInput();
  }

  public function logout()
  {
    $this->session->destroy();
    $this->session->setFlashdata('pesan', 'Logout berhasil.');

    return redirect()->to(base_url('/'))->withInput();
  }

  public function destroy()
  {
    $this->session->destroy();
    return redirect()->to(base_url('/'));
  }
}
