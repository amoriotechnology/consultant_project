<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsultantsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsultantsTable Test Case
 */
class ConsultantsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsultantsTable
     */
    public $Consultants;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Consultants',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Consultants') ? [] : ['className' => ConsultantsTable::class];
        $this->Consultants = TableRegistry::getTableLocator()->get('Consultants', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Consultants);

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
