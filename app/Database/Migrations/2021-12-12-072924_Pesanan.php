<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pesanan extends Migration
{
    public function up()
    {
         //buat skema tabel pesanan
         // username (string 50 primary), nama lengkap (string 100), nomorHp (int 16), 
         // bykPenukaran (int 10), kota (string 50), alamat (string 250) 
         $this->forge->addField([
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'namaLengkap' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'nomorHp' => [
                'type' => 'INT',
                'constraint' => '16',
            ],
            'bykPenukaran' => [
                'type' => 'INT',
                'constraint' => '10',
            ],
            'kota' => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
            ],'alamat' => [
                'type'              => 'VARCHAR',
                'constraint'        => '250',
            ],
        ]);
        $this->forge->addPrimaryKey('username',true);
        $this->forge->createTable('Pesanan');
    }

    public function down()
    {
        //buat perintah untuk drop table
        $this->forge->dropTable('Pesanan');
    }
}
