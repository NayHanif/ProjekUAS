<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
  protected $table = 'article';
  protected $primaryKey = 'id';
  protected $useTimestamps = true;

  protected $allowedFields = ['id', 'judul', 'penulis', 'isi1', 'isi2', 'isi3', 'created_at', 'updated_at'];

  public function getId($id = false)
  {
    if ($id == false) {
      return $this->findAll();
    }

    return $this->where(['id' => $id])->first();
  }
}
