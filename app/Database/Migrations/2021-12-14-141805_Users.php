<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'username' => [
        'type' => 'VARCHAR',
        'constraint' => '50',
      ],
      'password' => [
        'type' => 'VARCHAR',
        'constraint' => '255',
      ],
      'namadepan' => [
        'type' => 'VARCHAR',
        'constraint' => '50',
      ],
      'namabelakang' => [
        'type' => 'VARCHAR',
        'constraint' => '50',
      ],
      'nomorhp' => [
        'type' => 'VARCHAR',
        'constraint' => '20',
      ],
      'alamat' => [
        'type' => 'VARCHAR',
        'constraint' => '255',
      ],
      'jumlahtukar' => [
        'type' => 'INT',
        'constraint' => '11',
        'null' => true,
      ],
      'level' => [
        'type'              => 'INT',
        'constraint'        => '2',
      ],
      'created_at' => [
        'type' => 'DATETIME',
        'null' => 'true',
      ],
      'updated_at' => [
        'type' => 'DATETIME',
        'null' => 'true',
      ],
    ]);
    $this->forge->addPrimaryKey('username', true);
    $this->forge->createTable('users');
  }

  public function down()
  {
    //
  }
}
