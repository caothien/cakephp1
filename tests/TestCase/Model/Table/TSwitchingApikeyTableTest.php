<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TSwitchingApikeyTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TSwitchingApikeyTable Test Case
 */
class TSwitchingApikeyTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TSwitchingApikeyTable
     */
    public $TSwitchingApikey;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.t_switching_apikey'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TSwitchingApikey') ? [] : ['className' => 'App\Model\Table\TSwitchingApikeyTable'];
        $this->TSwitchingApikey = TableRegistry::get('TSwitchingApikey', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TSwitchingApikey);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
