<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubSubCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubSubCategoriesTable Test Case
 */
class SubSubCategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubSubCategoriesTable
     */
    public $SubSubCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SubSubCategories',
        'app.Categories',
        'app.SubCategories',
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
        $config = TableRegistry::getTableLocator()->exists('SubSubCategories') ? [] : ['className' => SubSubCategoriesTable::class];
        $this->SubSubCategories = TableRegistry::getTableLocator()->get('SubSubCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SubSubCategories);

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
