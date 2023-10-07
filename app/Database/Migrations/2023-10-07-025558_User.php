<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
        $this->forge->addField([
            'user_id'          => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'username'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'email'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'password'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'points'      => [
                'type'           => 'int',
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('user', TRUE);
    }

    //-------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
