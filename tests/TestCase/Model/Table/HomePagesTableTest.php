<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HomePagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HomePagesTable Test Case
 */
class HomePagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HomePagesTable
     */
    public $HomePages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.HomePages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('HomePages') ? [] : ['className' => HomePagesTable::class];
        $this->HomePages = TableRegistry::getTableLocator()->get('HomePages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HomePages);

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
