<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateKegiatan extends Migration
{
    public function up()
    {
        $fields = [
            'introtext'     => ['type' => 'VARCHAR', 'constraint' => 255, 'after' => 'title'],
        ];
        $this->forge->addColumn('kegiatan', $fields);
    }
    
    public function down()
    {
        $fields = [
            'introtext',
        ];
        $this->forge->dropColumn('kegiatan', $fields);
    }
}