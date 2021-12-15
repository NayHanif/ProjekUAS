<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tukar extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id' => [
        'type' => 'VARCHAR',
        'constraint' => '10',
      ],
      'username' => [
        'type' => 'VARCHAR',
        'constraint' => '50'
      ],
      'lokasi' => [
        'type' => 'VARCHAR',
        'constraint' => '50'
      ],
      'jumlah' => [
        'type' => 'INT',
        'constraint' => '10'
      ],
      'status' => [
        'type' => 'VARCHAR',
        'constraint' => '20',
        'null' => true,
      ]
    ]);
    $this->forge->addPrimaryKey('id');
    $this->forge->createTable('tukar');
  }

  public function down()
  {
    //
  }
}
