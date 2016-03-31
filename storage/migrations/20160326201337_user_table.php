<?php

use Phinx\Migration\AbstractMigration;

class UserTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('user');

        if (!$this->hasTable('user')) {
            $table->create();
        }

        // Columns
        $table->addColumn('email', 'string', [
            'length'  => 50,
            'default' => null,
            'null'    => true
        ])->addColumn('first_name', 'string', [
            'length'  => 50,
            'default' => null,
            'null'    => true
        ])->addColumn('last_name', 'string', [
            'length'  => 50,
            'default' => null,
            'null'    => true
        ])->addColumn('role', 'enum', [
            'default' => 'visitor',
            'values'  => [
                'visitor',
                'admin'
            ]
        ])->addColumn('password_hash', 'string', [
            'length'  => 64,
            'default' => null,
            'null'    => true
        ])->addColumn('password_salt', 'string', [
            'length'  => 32,
            'default' => null,
            'null'    => true
        ])->addColumn('recovery_hash', 'string', [
            'length'  => 32,
            'default' => null,
            'null'    => true
        ])->addColumn('created_at', 'timestamp', [
            'default' => 'CURRENT_TIMESTAMP',
            'update'  => ''
        ])->addColumn('updated_at', 'timestamp', [
            'default' => null,
            'null'    => true
        ])->update();

        // Indexes
        $table->addIndex('email', [
            'unique' => true
        ])->update();
    }

    public function down()
    {
        if ($this->hasTable('user')) {
            $this->dropTable('user');
        }
    }
}
