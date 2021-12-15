<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Article extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id' => [
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => TRUE,
        'auto_increment' => TRUE
      ],
      'judul' => [
        'type' => 'VARCHAR',
        'constraint' => '100',
      ],
      'penulis' => [
        'type' => 'VARCHAR',
        'constraint' => '50'
      ],
      'isi1' => [
        'type' => 'TEXT',
        'null' => TRUE,
      ],
      'isi2' => [
        'type' => 'TEXT',
        'null' => TRUE,
      ],
      'isi3' => [
        'type' => 'TEXT',
        'null' => TRUE,
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
    $this->forge->addKey('id', true);
    $this->forge->createTable('article');
  }

  public function down()
  {
    //
  }
}
