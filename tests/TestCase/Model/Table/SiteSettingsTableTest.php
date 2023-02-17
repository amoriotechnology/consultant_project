<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SiteSettingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SiteSettingsTable Test Case
 */
class SiteSettingsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SiteSettingsTable
     */
    public $SiteSettings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SiteSettings',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SiteSettings') ? [] : ['className' => SiteSettingsTable::class];
        $this->SiteSettings = TableRegistry::getTableLocator()->get('SiteSettings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SiteSettings);

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
