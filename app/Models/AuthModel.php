<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{

  public function getLogin($username, $tbl)
  {
    $builder = $this->db->table($tbl);
    $builder->where('username', $username);
    $log = $builder->get()->getRow();
    return $log;
  }

  public function getLevel($level, $tbl)
  {
    $builder = $this->db->table($tbl);
    $builder->where('level', $level);
    $log = $builder->get()->getRow();
    return $log;
  }
}
