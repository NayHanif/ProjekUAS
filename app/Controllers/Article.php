<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use App\Models\UserModel;

class Article extends BaseController
{
  protected $articleModel, $userModel;

  public function __construct()
  {
    $this->articleModel = new ArticleModel();
    $this->userModel = new UserModel();
  }

  public function article()
  {
    $data = [
      'title' => 'Articles | Reminyak.id',
      'list' => $this->articleModel->findAll(),
      'items' => $this->userModel->getUsername(session()->get('username'))
    ];

    return view('article', $data);
  }

  public function articlePage($id)
  {
    $row = $this->articleModel->getId($id);
    $data = [
      'title' => 'Article | Reminyak.id',
      'list' => $row,
      'items' => $this->userModel->getUsername(session()->get('username'))
    ];

    return view('template-article', $data);
  }
}
