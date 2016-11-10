<?php
use Migrations\AbstractMigration;

class CreateSwitchingApikey extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('t_switching_apikey', ['id' => false, 'primary_key' => ['id']]);
        $table->addColumn('id', 'integer', [
            'limit' => 10,
            'null' => false,
            'identity' => true,
        ]);
        $table->addColumn('api_key', 'string', [
            'default' => null,
            'limit' => 10,
            'null' => false,
        ]);
        $table->addColumn('api_secret', 'string', [
            'default' => null,
            'limit' => 10,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
