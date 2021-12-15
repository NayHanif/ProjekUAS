<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\AuthModel;
use App\Models\TukarModel;
use App\Models\ArticleModel;

class User extends BaseController
{
  protected $userModel, $authModel, $tukarModel, $articleModel, $session;

  public function __construct()
  {
    $this->userModel = new UserModel();
    $this->authModel = new AuthModel();
    $this->tukarModel = new TukarModel();
    $this->articleModel = new ArticleModel();
    $this->session = session();
  }

  public function dashboard($username)
  {

    $row = $this->tukarModel->where('status', 'Pending')->find($username);

    $data = [
      'title' => 'Dashboard | Reminyak.id',
      'username' => $this->userModel->getUsername($username),
      'list' => $this->articleModel->findAll(),
      'items' => $this->userModel->find($username),
      'items2' => ($row != NULL) ? $row : $this->tukarModel->find($username),
    ];

    if (!$this->session->has('logged_in')) {
      $this->session->setFlashdata('error', 'Tidak dapat mengakses laman.');
      return redirect()->to(base_url('/login'))->withInput();
    }

    if ($this->session->get('level') == 1) {
      return redirect()->to(base_url('/admin/user-list'));
    }

    if ($this->session->get('level') == 1) {
      $this->session->setFlashdata('error', 'Tidak dapat mengakses dashboard user.');
      return redirect()->back();
    }

    if (empty($data['username'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Dashboard ' . $username . ' tidak ditemukan.');
    }

    return view('/user-pages/dashboard', $data);
  }

  public function tukar($username)
  {
    $data = [
      'title' => 'Tukar Minyak | Reminyak.id',
      'username' => $this->userModel->getUsername($username),
      'items' => $this->userModel->find($username),
      'opsi' => ['Jakarta', 'Bogor', 'Depok', 'Tangerang', 'Bekasi']
    ];

    return view('user-pages/tukar', $data);
  }
}
