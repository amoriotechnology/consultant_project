<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BookAppointmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BookAppointmentsTable Test Case
 */
class BookAppointmentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BookAppointmentsTable
     */
    public $BookAppointments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.BookAppointments',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('BookAppointments') ? [] : ['className' => BookAppointmentsTable::class];
        $this->BookAppointments = TableRegistry::getTableLocator()->get('BookAppointments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BookAppointments);

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
