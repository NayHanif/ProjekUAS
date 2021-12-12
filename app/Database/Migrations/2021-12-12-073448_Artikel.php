<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Artikel extends Migration
{
    public function up()
    {
        // artikel : id (int 3 primary), judul (string 50), 
        // penulis (string 50), isi (string 500) 

        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => '3',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'penulis' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'isi' => [
                'type' => 'VARCHAR',
                'constraint' => '500',
            ],
        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('Artikel');
    }

    public function down()
    {
        //buat perintah untuk drop table
        $this->forge->dropTable('Artikel');
    }
}
