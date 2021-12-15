<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\TukarModel;
use App\Models\ArticleModel;

class Admin extends BaseController
{
  protected $userModel, $tukarModel, $articleModel, $session, $validation;

  public function __construct()
  {
    $this->userModel = new UserModel();
    $this->tukarModel = new TukarModel();
    $this->articleModel = new ArticleModel();
    $this->validation = \Config\Services::validation();
    $this->session = session();
  }

  public function userList()
  {
    $data = [
      'title' => 'List User | Reminyak.id',
      'list' => $this->userModel->findAll()
    ];

    if ($this->session->get('level') != 1) {
      $this->session->setFlashdata('pesan', 'Tidak memiliki akses');
      return redirect()->to(base_url('/dashboard/' . $this->session->get('username')))->withInput();
    } elseif (!$this->session->has('logged_in')) {
      $this->session->setFlashdata('pesan', 'Tidak memiliki akses');
      return redirect()->to(base_url('/dashboard/' . $this->session->get('username')))->withInput();
    }
    return view('/admin-pages/user-list', $data);
  }

  public function tukarList()
  {
    $data = [
      'title' => 'List Tukar | Reminyak.id',
      'list' => $this->tukarModel->findAll()
    ];

    if ($this->session->get('level') != 1) {
      $this->session->setFlashdata('pesan', 'Tidak memiliki akses');
      return redirect()->to(base_url('/dashboard/' . $this->session->get('username')))->withInput();
    } elseif (!$this->session->has('logged_in')) {
      $this->session->setFlashdata('pesan', 'Tidak memiliki akses');
      return redirect()->to(base_url('/dashboard/' . $this->session->get('username')))->withInput();
    }
    return view('/admin-pages/tukar-list', $data);
  }

  public function button($id)
  {
    $row = $this->tukarModel->getId($id);
    $data = [
      'title' => 'Edit | Reminyak.id',
      'list' => $row
    ];
    if ($this->session->get('level') != 1) {
      $this->session->setFlashdata('pesan', 'Tidak memiliki akses');
      return redirect()->to(base_url('/dashboard/' . $this->session->get('username')))->withInput();
    } elseif (!$this->session->has('logged_in')) {
      $this->session->setFlashdata('pesan', 'Tidak memiliki akses');
      return redirect()->to(base_url('/dashboard/' . $this->session->get('username')))->withInput();
    }
    return view('/admin-pages/tukar', $data);
  }

  public function article()
  {
    $data = [
      'title' => 'Create | Reminyak.id',
      'validation' => \Config\Services::validation()
    ];
    if ($this->session->get('level') != 1) {
      $this->session->setFlashdata('pesan', 'Tidak memiliki akses');
      return redirect()->to(base_url('/dashboard/' . $this->session->get('username')))->withInput();
    } elseif (!$this->session->has('logged_in')) {
      $this->session->setFlashdata('pesan', 'Tidak memiliki akses');
      return redirect()->to(base_url('/dashboard/' . $this->session->get('username')))->withInput();
    }

    return view('admin-pages/create-article', $data);
  }

  public function createArticle()
  {
    if (!$this->validate([
      'judul' => [
        'rules' => 'required',
        'errores' => [
          'required' => '{field} harus diisi'
        ]
      ],
      'penulis' => [
        'rules' => 'required',
        'errores' => [
          'required' => '{field} harus diisi'
        ]
      ],
      'isi1' => [
        'rules' => 'required',
        'errores' => [
          'required' => '{field} harus diisi'
        ]
      ],
      'isi2' => [
        'rules' => 'required',
        'errores' => [
          'required' => '{field} harus diisi'
        ]
      ],
      'isi3' => [
        'rules' => 'required',
        'errores' => [
          'required' => '{field} harus diisi'
        ]
      ]
    ])) {
      return redirect()->to(base_url('/admin/article'))->withInput()->with('validation', $this->validation);
    }

    $this->articleModel->insert([
      'judul' => $this->request->getVar('judul'),
      'penulis' => $this->request->getVar('penulis'),
      'isi1' => $this->request->getVar('isi1'),
      'isi2' => $this->request->getVar('isi2'),
      'isi3' => $this->request->getVar('isi3'),
    ]);

    $this->session->setFlashdata('pesan', 'Article berhasil dibuat.');
    return redirect()->to(base_url('/admin/article'))->withInput();
  }

  public function articleList()
  {
    $data = [
      'title' => 'List Article | Reminyak.id',
      'list' => $this->articleModel->findAll()
    ];

    if ($this->session->get('level') != 1) {
      $this->session->setFlashdata('pesan', 'Tidak memiliki akses');
      return redirect()->to(base_url('/dashboard/' . $this->session->get('username')))->withInput();
    } elseif (!$this->session->has('logged_in')) {
      $this->session->setFlashdata('pesan', 'Tidak memiliki akses');
      return redirect()->to(base_url('/dashboard/' . $this->session->get('username')))->withInput();
    }
    return view('/admin-pages/article-list', $data);
  }

  public function deleteArticle($id)
  {
    $this->articleModel->delete($id);
    return redirect()->to(base_url('/admin/article-list'));
  }
}
