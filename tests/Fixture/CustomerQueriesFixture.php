<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CustomerQueriesFixture
 */
class CustomerQueriesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'message' => ['type' => 'string', 'length' => 500, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'consultation' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'customer_id' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'mobile' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'current_timestamp()', 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'current_timestamp()', 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'message' => 'Lorem ipsum dolor sit amet',
                'consultation' => 'Lorem ipsum dolor sit amet',
                'customer_id' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'mobile' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-12-29 09:05:43',
                'modified' => '2022-12-29 09:05:43',
            ],
        ];
        parent::init();
    }
}
