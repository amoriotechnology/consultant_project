<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaymentPagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaymentPagesTable Test Case
 */
class PaymentPagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PaymentPagesTable
     */
    public $PaymentPages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PaymentPages',
        'app.Payments',
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
        $config = TableRegistry::getTableLocator()->exists('PaymentPages') ? [] : ['className' => PaymentPagesTable::class];
        $this->PaymentPages = TableRegistry::getTableLocator()->get('PaymentPages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PaymentPages);

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
