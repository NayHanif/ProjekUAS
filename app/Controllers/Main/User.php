<?php

namespace App\Controllers\Main;

use App\Controllers\BaseController;

class User extends BaseController
{
  public function index($id = 0)
  {
    $data = [
      'title' => 'Home | Reminyak.id',
      'id' => $id,
      'username' => 'kevinopee'
    ];
    return view('pages/home', $data);
  }

  public function about($id = 0)
  {
    $data = [
      'title' => 'About | Reminyak.id',
      'id' => $id,
      'username' => 'kevinopee'
    ];

    return view('pages/about', $data);
  }

  public function article($id = 0)
  {
    $data = [
      'title' => 'Articles | Reminyak.id',
      'id' => $id,
      'username' => 'kevinopee'
    ];

    return view('pages/article', $data);
  }

  public function form($id = 1)
  {
    $data = [
      'title' => 'Tukar | Reminyak.id',
      'id' => $id,
      'username' => 'kevinopee'
    ];

    return view('pages/form', $data);
  }
}
