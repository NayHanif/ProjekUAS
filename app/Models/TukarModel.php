<?php

namespace App\Models;

use CodeIgniter\Model;

class TukarModel extends Model
{
  protected $table = 'tukar';
  protected $primaryKey = 'username';

  protected $allowedFields = ['id', 'username', 'lokasi', 'jumlah', 'status'];

  public function getId($id = false)
  {
    if ($id == false) {
      return $this->findAll();
    }

    return $this->where(['id' => $id])->first();
  }
}
