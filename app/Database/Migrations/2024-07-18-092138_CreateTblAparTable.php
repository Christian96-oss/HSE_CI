<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblAparTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nomor_apar' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'brand' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'tipe' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'berat' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'lokasi' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'expired' => [
                'type' => 'DATE',
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'img' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'plant' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'record_date' => [
                'type' => 'DATE',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_apar');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_apar');
    }
}
