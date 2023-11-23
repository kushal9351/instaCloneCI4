<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint' => 8,
                'auto_increment' => true
            ],
            'email_id' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
            'mobile_No' => [
                'type' => 'VARCHAR',
                'constraint' => '10'
            ],
            'fullName' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
            'userName' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
            'resetToken' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'bio' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'addLink' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'gender' => [
                'type' => 'VARCHAR',
                'constraint' => '20'
            ],

        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users');
    }

    public function down()
    {
        //
    }
}
