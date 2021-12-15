<?php

namespace App\Controllers;

use App\Models\ArticleModel;

class Home extends BaseController
{
  protected $articleModel;

  public function __construct()
  {
    $this->articleModel = new ArticleModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Home | Reminyak.id',
      'list' => $this->articleModel->findAll()
    ];

    if (session()->get('username') != NULL) {
      return redirect()->to(base_url('/dashboard/' . session()->get('username')));
    }
    return view('pages/home', $data);
  }

  public function about()
  {
    $data = ['title' => 'About | Reminyak.id'];
    if (session()->get('username') != NULL) {
      return redirect()->to(base_url('/dashboard/' . session()->get('username')));
    }
    return view('pages/about', $data);
  }

  public function services()
  {
    $data = ['title' => 'Services | Reminyak.id'];
    if (session()->get('username') != NULL) {
      return redirect()->to(base_url('/dashboard/' . session()->get('username')));
    }
    return view('pages/services', $data);
  }

  public function login()
  {
    $data = [
      'title' => 'Login | Reminyak.id',
      'validation' => \Config\Services::validation()
    ];

    if (session()->get('username') != NULL) {
      return redirect()->to(base_url('/dashboard/' . session()->get('username')));
    }

    return view('pages/login', $data);
  }

  public function register()
  {
    $data = [
      'title' => 'Register | Reminyak.id',            'validation' => \Config\Services::validation()
    ];

    return view('pages/register', $data);
  }
}
