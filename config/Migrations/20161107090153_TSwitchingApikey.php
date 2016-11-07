<?php
use Migrations\AbstractMigration;

class TSwitchingApikey extends AbstractMigration
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
        // $table = $this->table('t_switching_apikey');
        // $table->addColumn('api_key', 'string', [
        //     'default' => null,
        //     'limit' => 10,
        //     'null' => false,
        // ]);
        // $table->addColumn('api_secret', 'string', [
        //     'default' => null,
        //     'limit' => 10,
        //     'null' => false,
        // ]);
        // $table->addColumn('created', 'datetime', [
        //     'default' => null,
        //     'null' => false,
        // ]);
        // $table->addColumn('modified', 'datetime', [
        //     'default' => null,
        //     'null' => false,
        // ]);

        // $table->create();
    }

    public function up()
    {
        $table = $this->table('t_switching_apikey');
        $table->addColumn('id', 'integer', array('limit' => 10, 'autoIncrement' => true,))
              ->addColumn('api_key', 'string', array('default' => null, 'limit' => 10, 'null' => false,))
              ->addColumn('api_secret', 'string', array('default' => null, 'limit' => 10, 'null' => false,))
              ->addColumn('email', 'string', array('limit' => 100))
              ->addColumn('created', 'datetime', array('default' => null, 'null' => false,))
              ->addColumn('modified', 'datetime', array('default' => null, 'null' => false,))
              ->save();
    }
}
