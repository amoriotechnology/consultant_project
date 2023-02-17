<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerQueriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerQueriesTable Test Case
 */
class CustomerQueriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomerQueriesTable
     */
    public $CustomerQueries;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CustomerQueries',
        'app.Customers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CustomerQueries') ? [] : ['className' => CustomerQueriesTable::class];
        $this->CustomerQueries = TableRegistry::getTableLocator()->get('CustomerQueries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CustomerQueries);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
