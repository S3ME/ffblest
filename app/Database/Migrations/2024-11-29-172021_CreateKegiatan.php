<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKegiatan extends Migration
{
    public function up()
    {
        $fields = [
            'id'                => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'title'             => ['type' => 'VARCHAR', 'constraint' => 255],
            'slug'              => ['type' => 'VARCHAR', 'constraint' => 255],
            'content'           => ['type' => 'MEDIUMTEXT'],
            'images'            => ['type' => 'VARCHAR', 'constraint' => 255],
            'description'       => ['type' => 'VARCHAR', 'constraint' => 255],
            'highlight'         => ['type' => 'INT', 'constraint' => 8],
            'created_at'        => ['type' => 'DATETIME'],
            'updated_at'        => ['type' => 'DATETIME'],
            'deleted_at'        => ['type' => 'DATETIME', 'null' => true],
        ];
        $this->forge->addField($fields);
        $this->forge->addKey('id', true);
        $this->forge->createTable('kegiatan', true);
    }
    
    public function down()
    {
        $this->forge->dropTable('kegiatan');
    }
}