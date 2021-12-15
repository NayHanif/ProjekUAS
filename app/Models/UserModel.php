<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

  protected $table = 'users';
  protected $primaryKey = 'username';
  protected $useTimestamps = true;

  protected $allowedFields = ['username', 'password', 'namadepan', 'namabelakang', 'level', 'nomorhp', 'alamat', 'status', 'jumlahtukar'];

  public function getUsername($username = false)
  {
    if ($username == false) {
      return $this->findAll();
    }

    return $this->where(['username' => $username])->first();
  }
}
