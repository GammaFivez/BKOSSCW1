<?php

use Phinx\Migration\AbstractMigration;

class MyNewMigration extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('followers', ['signed' => false]);
        $table->addColumn('follower_id', 'integer')
              ->addColumn('created', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
              ->create();
    }
}